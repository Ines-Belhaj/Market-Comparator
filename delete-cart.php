<?php
session_start();
$customerId=$_SESSION['id'];
include "connection.php";;
$shoppingList = $db->cart("customer_id= ?", $customerId);
$affected = $shoppingList->delete()	;
header("Location: start-shopping.php") ;
 ?>
