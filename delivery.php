<?php
session_start();
?>

<?php
$title = "delivery";
$stylesheet="css/delivery.css";
include "template.php";
?>

<?php function body() { ?>

<center>

    <?php
        $customer_id = $_SESSION['id'];
        include "connection.php";
        $shoppingList = $db->cart()
          ->where("customer_id = ?", $customer_id);
    ?>
    <img width="600" height="336" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_42kbik7aUQif4XGtPXihHtOHnNdAIgEIflWZv_kW3qDjqWydJAnCpfUq3P2vP1Hejfs&usqp=CAU" alt="delivery"><br>
    <h1 style="text-align:center">Don't want to make a displacement?</h1>
   <h3 style="text-align:center">We can make a delivery for you!</h3>
    <table class="list" >
      <tr class="list">
        <td class="list"><h4>product</h4></td>
        <td class="list"><h4>quantity</h4></td>
      </tr>

              <?php foreach ($shoppingList as $item) { ?>
                <tr class="list">

                  <?php
                    $product_kind = $db->product_kind[$item['product_kind_id']];?>
                    <td class="list"><?php echo $product_kind['name'] ; ?></td>
                    <td class="list"><?php  echo $item['quantity']; ?></td>
              </tr>

              <?php } ?>
            </table>


        <?php
          $min = null;
          $bestMarket = null;

          foreach ($db->professional() as $market)
          {
            $marketId = $market['id'];
            $productAvailable = true;
            $sum = 0;

            foreach ($shoppingList as $item) {
              $productKindId = $item['product_kind_id'];
              $productKind = $db->product_kind[$productKindId];

              $product = $db->product("name = ? AND category = ? AND market_id = ?", $productKind['name'], $productKind['category'], $marketId)->fetch();
              if($product) {
                $sum += $product['price'] * $item['quantity'];
              } else {
                $productAvailable = false;
                $sum=$sumPreviousMarket;
                break;
              }
            }

            if ($productAvailable) {
              if($min == null || $sum < $min) {
                $min = $sum;
                $bestMarket = $market;
              }
            }
            $sumPreviousMarket= $sum;

          }?>
<table >

      <tr>
        <td class="list">
            <p class="header" style="text-align:center"><b>DELIVERY OFFER</b></p><br>
        </td>
        <td class="list">
            <p class="header" style="text-align:center"><b>BASIC OFFER</b></p><br>
        </td>
      </tr>
<tr>
  <td class="list">
    <center>

    <p class="text">The most suitable market for you is <b> <?php echo $bestMarket["market_name"]; ?> </b></p>
    <p class="text">The cost of your grocery: <b> <?php echo $sum; ?> D <em><small>+ 10D  delivery</small></em></p>
    <?php $popularityMarket = $db->popularity("market_id = ? ", $bestMarket["id"])->fetch();
      $variable = $popularityMarket["popularity"];
      $newPopularityMarket = array(
              "popularity" => $variable + 1 ,
              "customer_order" => $customer_id,
              "market_id" => $bestMarket["id"],
      );
      $affected = $popularityMarket->update($newPopularityMarket);

    ?>

    <button class="btn btn-danger"><a href="delete-cart.php"><b>Valid</b></a></button>
  </center>

  </td>
  <td class="list">

  <center>


    <form action = "delivery-submit.php">
      <div class="mb-3">
        <label  for="city" class="form-label"><b>city: </b></label>
        <input type="text" class="form-control"name="city"  ><br>
      </div>

      <div class="mb-3">
        <label  for="region" class="form-label"><b>region: </b></label>
        <input type="text" class="form-control"name="region"  ><br>
      </div>
      <button class="btn btn-danger"><a href="add-product-submit.php"><small><b>CONFIRM</b></small></a></button>
    </form>
  </center>

  </td>
    </table>
<?php } ?>
</center>
