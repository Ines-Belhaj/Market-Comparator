<?php session_start();
    $id = $_SESSION['id'];
    $marketName = $_GET['marketName'];
    $email = $_GET['email'];
    $address = $_GET['address'];
    $number = $_GET['number'];
    $password = $_GET['password'];

    include "connection.php";
    $market = $db->professional[$id];
    if(empty ($marketName)){
        $marketName = $market['market_name'];
    }
    if(empty ($email)){
        $email = $market['email'];
    }
    if(empty ($address)){
        $address = $market['address'];
    }
    if(empty ($number)){
        $number = $market['number'];
    }
    if(empty ($password)){
        $password = $market['password'];
    }
    $newMarket = array(
            "market_name" => $marketName,
            "email" => $email,
            "address" => $address,
            "number" => $number,
            "password" => $password,

    );
    $affected = $market->update($newMarket);
    header("location: professional-management-account.php");
    ?>
