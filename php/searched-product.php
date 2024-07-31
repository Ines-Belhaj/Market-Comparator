<?php
$title = "search product";
$stylesheet="css/searched-product.css";
include "template.php";
function body() {

$searchedProduct= $_GET["product"];
include("connection.php");
$productKind = $db->product_kind("name = ?", $searchedProduct)->fetch();
if ($productKind)
  { ?>
  <center>

<div class="searchProduct">
        <form  action="add-item-submit.php" method="get">
            <div class="mb-3">
        <img src="<?php echo $productKind["image"] ;?>" alt="<?php $productKind["name"]; ?>" >
        <h3><?php echo $productKind['name']; ?></h3>
        <input type="hidden" name="productKindId" value="<?php echo $productKind['id'] ?>" />
        <p><input  class="form-control" type="number" name="quantity" value="0" min="1"/>Kg</p>
        <input class="btn btn-primary" type="submit" name="add" value="add to cart">
      </div>

        </form>
      </div>

  </center>





<?php
} /*else {
header("location: start-shopping.php");
}*/
}
?>
