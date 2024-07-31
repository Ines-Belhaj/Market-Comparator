<?php
$title = "change quantity";
include "template.php";
?>

<?php function body() { ?>

    <?php
    $productKindId=$_GET['productKindId'];
    include "connection.php";
    $item = $db->cart("product_kind_id= ?", $productKindId)->fetch();
    $productKind =$db->product_kind[$productKindId] // need it just for the name and image
    ?>
    <center>
          <form class="change-quantity" action="change-quantity-submit.php" method="get">
          <?php if ($productKind["image"]) { ?>
          <img src="<?php echo $productKind["image"] ;?>" alt=<?php $productKind["name"] ;?> >
          <?php } ?>
          <h3><?php echo $productKind['name']; ?></h3>
          <input type="hidden" name="itemId" value="<?php echo $item['id'] ?>" />
          <p><input type="number" name="newQuantity" value="0"/>Kg</p>
          <input type="submit" name="change" value="save changes">
          </form>

    <a href="delivery.php">finish shopping</a>
  &nbsp  &nbsp &nbsp  &nbsp  &nbsp
    <a href="start-shopping.php">continue shopping</a>

    </center>

<?php } ?>
