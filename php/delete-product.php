<?php

$id = $_GET['id'];
include "connection.php";
$product = $db->product[$id];        //selected the row with the id 
$affected = $product->delete();
header("Location: product-menu.php");


?>
