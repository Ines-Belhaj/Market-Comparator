<?php
session_start();
?>
<?php
$title = "dilvery";
include "template.php";
?>

<?php function body() { ?>


    <?php
        $customer_id = $_SESSION['id'];
        $city=$_GET["city"];
        $region=$_GET["region"];

        include "connection.php";
        $shoppingList = $db->cart()
          ->where("customer_id = ?", $customer_id);
    ?>
    <img width="600" height="336" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_42kbik7aUQif4XGtPXihHtOHnNdAIgEIflWZv_kW3qDjqWydJAnCpfUq3P2vP1Hejfs&usqp=CAU" alt="delivery"><br>
    <h1 style="text-align:center">Don't want to make a displacement?</h1>
    <h3 style="text-align:center">We can make a delivery for you!</h3>

    <table>



        <?php
          $min = null;
          $bestMarket = null;
      $closestLocations = $db->location()
          ->where("region = ? AND city = ?", $region,$city);
          foreach ($closestLocations as $closestLocation ) {
            $marketId =$closestLocation['market_id'];
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
                $street= $closestLocation["street"];
                $bestMarket = $db->professional("id = ?", $marketId)->fetch();

              }
            }
            $sumPreviousMarket= $sum;

          }?>
<tr>
  <td>
    <p>the most suitable market for you is <?php echo $bestMarket["market_name"]; ?> </p>
    <p>street: <?php echo $street;  ?></p>
    <p>the cost of your grocery: <?php echo $sum; ?> D </p>
    <?php $popularityMarket = $db->popularity("market_id = ? ", $bestMarket["id"])->fetch();
      $variable = $popularityMarket["popularity"];
      $newPopularityMarket = array(
              "popularity" => $variable + 1 ,
              "customer_order" => $customer_id,
              "market_id" => $bestMarket["id"],
      );
      $affected = $popularityMarket->update($newPopularityMarket);

    ?>
    <p><a href="delete-cart.php"><img height="20" width="20" src="https://png.pngtree.com/element_our/png/20181213/valid-vector-icon-png_267488.jpg" alt="Valid icon"><b>Valid</b></a></p>
  </td>

</tr>
    </table>
<?php } ?>
