<?php
$title = "MODIFY";
include "template-market.php";
?>

<?php function body() { ?>
    <img width="650" height="350" src="https://images.unsplash.com/photo-1534723452862-4c874018d66d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z3JvY2VyeXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="product image"><br>
    <h1 style="text-align:center;">Products</h1>
    <h2 style="text-align:center;">MODIFY your PRODUCT</h2>

    <?php $id = $_GET['id'];
    include "connection.php";
    $product = $db->product[$id]; // get by primary key
    if ($product){ ?>

    <form action="modify-product-template.php">
        <label for="name"><p><b>NAME: </b>  </p></label>
        <input type="text" name="name" value="<?php echo $product['name'] ?>" id="name" value="<?php echo $product['name'] ?>">
        <br>

        <label for="barecode"><p><b>BARECODE: </b></p></label>
        <input type="text" name="barecode" id="barecode" value="<?php echo $product['barecode'] ?>">
        <br>

        <label for="price"><p><b>PRICE: </b>  </p></label>
        <input type="text" name="price" value="<?php echo $product['price'] ?>" id="price">
        <br>

        <label for="category"><p><b>CATEGORY:  </p></label>
        <select name="category" id="category">
            <option value="fruits&veggies">Fruits and veggies</option>
            <option value="by-milk_products">by milk products</option>
            <option value="fish_meat">fish meat</option>
            <option value="spices">spices</option>
        </select><br><br>
        <input type="hidden" name="id" value="<?php echo $product['id'] ?>" />
        <button type="submit" style="float: right;margin:10px 18.2% 0 0;"><a href="modify-product-template.php"><small><b>CONFIRM</b></small></a></button>
        <button style="float: left;margin:10px 0 0 18.2%;" ><a href="product-menu.php"><small><b>CANCEL</b></small></a></button>
        <br>

    </form>

    <?php } ?>

<p>
  <br>
<img width="300" height="300" src="https://static01.nyt.com/images/2017/08/01/business/00walmart-3/00walmart-3-jumbo.jpg" alt="grocery worker">
</p>
<?php } ?>
