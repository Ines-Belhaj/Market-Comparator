<?php


session_start();

$email=$_GET["email"];
$password=$_GET["password"];

include "connection.php";
$market=$db->professional("email = ? AND password = ?",$email,$password)->fetch();

if($market)
{
    $_SESSION["id"] = $market['id'];
    $_SESSION["market_name"] = $market['market_name'];
    header("Location:professional-management-account.php" );
}
else

  {
    $_SESSION['wrong']=true;
  header("Location:login-customer.php");  }

?>
