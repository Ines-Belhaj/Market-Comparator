<?php
session_start (); ?>
<?php
$title = "barcode";
include "template-market.php";
?>

<header>
  <img align="center" class="center" width="800" height="350" src="https://images.unsplash.com/photo-1534723452862-4c874018d66d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z3JvY2VyeXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="product image"><br>
  <h1 style="text-align:center;">Products</h1>
</header>

<?php function body() { ?>
  <a href="add-product.php"><img align="right" class="right" width="70" height="40" src="https://cdn.iconscout.com/icon/premium/png-512-thumb/add-product-4-837051.png" alt="add a new product"></a><br>
  <p style="text-align:right;"><small><b>ADD PRODUCT</b></small></p>

  <!-- Load icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- The form -->
  <form class="example" action="search_barecode.php">
    <input style="text-align:center;" type="text" id="barecode1" name="barecode1" placeholder="Search your product" >
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
  <?php $barecode = $_GET['barecode1'];
  $id = $_SESSION['id'];
    include "connection.php";
    $product = $db->product()
        ->where("name = ? OR barecode = ? OR category = ? AND market_id = ?  ", $barecode,$barecode,$barecode, $id);
?>

  <div style="text-align:center;">
    <table>
      <tr>
        <td>
          <p style="text-align:center;">Product<p>
        </td>

        <td>
          <p style="text-align:center;">Name</p>
        </td>

        <td>
          <p style="text-align:center;">Price</p>
        </td>

        <td>
          <p style="text-align:center;">Bare Code</p>
        </td>

        <td>
          <p style="text-align:center;">Category</p>
        </td>
      </tr>
      <?php foreach ($product as $product ) {
      if($product)
      { ?>
      <tr>
      <td>
        <img width="50" height="30" src="https://images.immediate.co.uk/production/volatile/sites/30/2017/01/Bananas-218094b-scaled.jpg?quality=90&resize=960%2C872" alt="banana"><br>
      </td>

      <td>
        <p style="text-align:center;"><b><small><?php echo $product['name'] ?></small></b></p>
      </td>

      <td>
        <p style="text-align:center;"><b><small><?php echo $product['price'] ?></small></b></p>
      </td>

      <td>
        <p style="text-align:center;"><b><small><?php echo $product['barecode'] ?></small></b></p>
      </td>

      <td>
        <p style="text-align:center;"><b><small><?php echo $product['category'] ?></small></b></p>
      </td>

      <td>
        <form action="modify-product.php">
          <input type="hidden" name="id" value="<?php echo $product['id'] ?>" />
          <button type="submit"><img width="20" height="20" src="https://img.icons8.com/ios/452/change.png" alt="change info"></button>
        </form>

        <form action="delete-product.php">
          <input type="hidden" name="id" value="<?php echo $product['id'] ?>" />
          <button type="submit"><img width="20" height="20" src="https://icons-for-free.com/iconfiles/png/512/delete+remove+trash+trash+bin+trash+can+icon-1320073117929397588.png" alt="delete"></button>
        </form>
      </td>
    </tr>
  <?php } ?>
  <?php } ?>
    </table>


  </div>
<?php } ?>
