<?php
$title = "add product";
include "template-market.php";
?>

<?php function body() { ?>


<img width="650" height="350" src="https://images.unsplash.com/photo-1534723452862-4c874018d66d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z3JvY2VyeXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="product image"><br>
<h1 style="text-align:center;">Products</h1>
<h2 style="text-align:center;">ADD a product</h2>

<div class="box" style="text-align:center;">
  <form action="add-product-submit.php">
    <label for="name"><p><b>Product's Name</b></p></label>
    <input type="text" id="name" name="name"><br><br>

    <label for="price"><p><b>Product's Price</b></p></label>
    <input type="text" id="price" name="price"><br><br>

    <label for="barecode"><p><b>Product's Bare Code</b></p></label>
    <input type="text" id="barecode" name="barecode"><br><br>

    <label for="category"><p><b>Product's category</b></p></label>   <!--list the categories-->
    <select name="category" id="category">
      <option value="fruits&veggies">Fruits and veggies</option>
      <option value="by-milk_products">by milk products</option>
      <option value="fish_meat">fish meat</option>
      <option value="spices">spices</option>
    </select><br><br>
    <button style="float: right;margin:10px 18.2% 0 0;"><a href="add-product-submit.php"><small><b>CONFIRM</b></small></a></button>
  </form>
<button style="float: left;margin:10px 0 0 18.2%;" ><a href="product-menu.php"><small><b>CANCEL</b></small></a></button>
</div>
<?php } ?>
