<?php session_start(); ?>

<?php
$title = "Cart";
$stylesheet="css/cart.css";
include "template.php";
?>

<?php function body() { ?>
  <center>

<h1><em>Cart</em></h1>
<p>welcome <?php echo $_SESSION['firstName'] ?>  </p>

<?php
include "connection.php";

$shoppingList = $db->cart()
    ->where("customer_id = ? ", $_SESSION["id"])
    ->order("id");
    // all items of the customer


    // to compare id of item and id of product to get the item s name

foreach ($shoppingList as $item) {
  $productKind = $db->product_kind[$item['product_kind_id']];
?>
<div class="item">
<?php if ($productKind["image"]) { ?>
<img src="<?php echo $productKind["image"]?>" alt=<?php $productKind["name"] ?> >
<?php } ?>
<h2><?php echo $productKind["name"]; ?> </h2>
<p>quantity: <?php echo $item['quantity'] ?></p>
<a href="change-quantity-in-cart.php?productKindId=<?php echo $productKind["id"] ?>"><img src="pics/edit.png" alt="edit"height="30" width="30"></a>
<a href="delete-item.php?productKindId=<?php echo $productKind["id"] ?>"><img src="pics/delete.png" alt="delete"height="30" width="30"></a>

</div>
  <?php } ?>
<br>

    <div class="finish">
      <a href="delivery.php"><img src="pics/finish-shopping.png" alt="finish shopping"height="100" width="150" ></a>
    </div>

<?php } ?>
