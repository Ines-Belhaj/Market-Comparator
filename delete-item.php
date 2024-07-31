<?php
$productKindId=$_GET['productKindId'];
include "connection.php";
$item = $db->cart("product_kind_id= ?", $productKindId)->fetch();
$affected = $item->delete()	;
header("Location: cart.php") ;
 ?>
