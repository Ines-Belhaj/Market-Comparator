<?php
$marketName=$_GET["marketName"];
$number=$_GET["number"];
$address=$_GET["address"];
$email=$_GET["email"];
$password=$_GET["password"];

//add to the database
include "connection.php";
$professional=$db->professional("market_name=? AND email=? AND password=?",$marketName,$email,$password)->fetch();
if($professional)
{
  header("Location: login-professional.php");
}
else {
$professional = array(
    "number" /*same as fields in the database*/ => $number,
    "address" => $address,
    "market_name" =>$marketName,
    "email" => $email,
    "password"=> $password,
);
$row1=$db->professional()->insert($professional);// this user is the array
        //    |
           //this $user is the table in database
           $marketId=$row1['id'];

           $popularity_market = array(
               "market_id" /*same as fields in the database*/ => $marketId,
               "popularity" => 0,
               "customer_order" => 0,
           );
  $row2=$db->popularity()->insert($popularity_market);
//go to home page
header("Location: professional-management-account.php?email=".$email);
}
?>
