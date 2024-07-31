<?php

session_start();
$email=$_GET["email"];
$password=$_GET["password"];

include "connection.php";
$customer=$db->customer("email = ? AND password = ?",$email,$password)->fetch();

if($customer)
{
    $_SESSION['id'] = $customer['id'];
    $_SESSION['firstName'] = $customer['first_name'];
    header("Location:start-shopping.php" );
}
else

  {
    $_SESSION['wrong']=true;
header("Location:login-customer.php");
  }

?>
