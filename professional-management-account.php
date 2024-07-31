<?php
session_start();
?>
<?php
$title = "Menu";
include "template-market.php";
$market_id = $_SESSION['id'];
?>

<?php function body() { ?>
<header>
	<h1 style="text-align:center;">Welcome</h1> <?php //echo the professional name ?>
</header>

<main>
<table>
<tr>
<td><img width="300" height="250" src="https://media.timeout.com/images/105475629/image.jpg" alt="product image" /></td>
<td> <img width="300" height="250" src="https://tmstools.co.th/wp-content/uploads/2016/10/map-location-pin.jpg" alt="location image" /></td>
<td><img width="300" height="250" src="pics/order.png" alt="order" /></td>
<td><img width="300" height="250" src="pics/popularity.png" alt="popularity" /></td>
</tr>
<tr>
<td>
<a href="product-menu.php"> <p style="text-align:center;"><b>PRODUCTS</b></p></a>
</td>
<td>
  <a href="location-menu.php"><p style="text-align:center; "><b>LOCATIONS</b></p></a>
</td>
<td><a href="order-menu.php"><p style="text-align:center; "><b>ORDERS/b></p></a></td>
<td><a href="popularity.php"><p style="text-align:center; "><b>POPULARITY GROWTH</b></p></a></td>
</table>




</main>



<?php } ?>
