<?php
$title = "Menu";
include "template-market.php";
?>

<img width="650" height="350" src="https://images.unsplash.com/photo-1534723452862-4c874018d66d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z3JvY2VyeXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="product image"><br>
<h1 style=" text-align:center;">Products</h1>
<h2 style="text-align:center;">ADD A PRODUCT</h2>


<?php function body() { ?>
  <form action="add-product.php">
      <button type="submit"><a href="add-product.php"><img width="25" height="25" class="center" src="https://image.flaticon.com/icons/png/512/59/59338.png" alt="escape icon" /></a></button>
      <input type="hidden" name="id" value="<?php echo $product['id'] ?>" />
  </form>
<p style="text-align:center;"><big>You have added<b> A NEW PRODUCT</b></big></p>
<p style="text-align:center;"><small><b>Click Here to Confirm</b></small></p>
<a href="product-menu.php"><img class="center" width="25" height="25" class="center" src="https://www.25project.org/wp-content/uploads/2019/11/confirm-smartphone-icon-with-png-and-vector-format-for-free-confirmation-png-512_512.png" alt="confirm icon" /></a>

<?php } ?>
