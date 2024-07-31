<?php
$title = "seafood meat poultry";
$stylesheet="css/category.css";

include "template.php";
?>

<?php function body() { ?>


    <img class="cat" src="pics/seafood-meat-poultry.png" alt="seafood-meat-poultry">
<br>



    <center>
<br>
<table>
  <tr>
    <td>
      <div  class="side">
        <h2>categories</h2>
        <p>  <a href="fruits-veggies.php">fruits & veggies</a></p>
        <p>  <a href="by-milk-products.php">by-milk products</a></p>
        <p>  <a href="seafood-meat-poultry.php">seafood meat popultry</a></p>
        <p>  <a href="cooking.php">cooking</a></p>
        <p>  <a href="cosmetics.php">cosmetics</a></p>
        <p>  <a href="hygiene.php">hygiene</a></p>
        <p>  <a href="flour-pasta-sides.php">flour pasta sides</a></p>
      </div>
    </td>
    <td>



<div class="products">
  <?php
  include "connection.php";
  $products=$db->product()
    ->where("category = ?","seafood-meat-poultry") //here how ti=o get the category as variable so i don t have to spare a page for each category
    ->order("name");
  ;
  foreach ($products as $product) {
    $productKind=$db->product_kind("name=?",$product["name"])->fetch();
    ?>
    <div class="product">
      <center>

      <form  action="add-item-submit.php" method="get">
      <div class="mb-3">
      <img class="item"src="<?php echo $productKind["image"] ;?>" alt="<?php $productKind["name"]; ?>" >
      <h3><?php echo $productKind['name']; ?></h3>
      <input type="hidden" name="productKindId" value="<?php echo $productKind['id'] ?>" />
      <p><input  class="form-control" type="number" name="quantity" value="0" min="1"/>Kg</p>
      <input class="btn btn-primary" type="submit" name="add" value="add to cart">
    </center>

</div>

      </form>
  </div>
  <?php } ?>
</td>
</tr>
</table>
</center>
<?php } ?>
