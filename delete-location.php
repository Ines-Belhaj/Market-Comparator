<?php

$id = $_GET['id'];
include "connection.php";
$location = $db->location[$id];        //selected the row with the id 
$affected = $location->delete();
header("Location: location-menu.php");


?>
