<?php
$itemId=$_GET['itemId'];
$newQuantity=$_GET['newQuantity'];

include "connection.php";
$item=$db->cart[$itemId];
// how to update a column in a table from db
$item['quantity'] = $newQuantity;
$affected = $item->update();
  header("Location: cart.php");
?>
