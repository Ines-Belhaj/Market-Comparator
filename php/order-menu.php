<?php
session_start();
$title = "Menu";
include "template-market.php";
$market_id = $_SESSION['id'];
include "connection.php";
$popularityMarket = $db->popularity("market_id = ? ", $market_id)->fetch();
$order = $popularityMarket['customer_order'];
$popularity = $popularityMarket['popularity'];
?>


<p>You had <?php  echo $popularity ?> orders in total</p>
<p>The client of identifiant <?php echo $order; ?> has done a purchase</p>
