<?php
session_start();

$customerId =$_SESSION['id'];
$productKindId =$_GET['productKindId'];
$quantity =$_GET['quantity'];

//add to Database if does not exist

include "connection.php";
$inShoppingList=$db->cart("product_kind_id= ? AND customer_id= ?  ", $productKindId, $customerId)->fetch();
    //->where("product_id= ? AND customer_id= ?  ", $productId, $customerId);
//if(isset($inShoppingList)
if($inShoppingList){
  //echo( $inShoppingList['product_id'] ) ;
  include "navbar.php";
  header("Location: change-quantity-in-cart.php?productKindId=".$productKindId);
}
else{

$item = array(
    "customer_id" => $customerId,
    "product_kind_id" => $productKindId,
    "quantity" => $quantity,
);
$row = $db->cart()->insert($item);
header("Location: start-shopping.php");
}
 ?>
