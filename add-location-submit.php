<?php
session_start();

$market_id =$_SESSION['id'];

$city = $_GET['city'];
$region = $_GET['region'];
$street = $_GET['street'];
$number = $_GET['number'];

include "connection.php";

$location = $db->location("market_id = ? AND city= ? AND region= ? AND street= ?", $market_id,$city,$region,$street)->fetch();


   if ( $location )
        {
            header("Location: exist-location.php");
        }
    else{
        $location =  array(
        "market_id" => $market_id,
        "city" => $city,
        "region" => $region,
        "street" => $street,
        "number" => $number);
        $row = $db->location()->insert($location);
        header("Location: new-location.php");
    };



?>
</body>
</html>
