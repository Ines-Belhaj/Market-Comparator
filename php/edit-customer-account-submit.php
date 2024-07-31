<?php session_start();



    $id = $_SESSION['id'];
    $firstName = $_GET['firstName'];
    $email = $_GET['email'];
    $number = $_GET['number'];
    $password = $_GET['password'];

    include "connection.php";
    $customer = $db->customer[$id];
    if(empty ($firstName)){
        $firstName = $customer['first_name'];
    }
    if(empty ($email)){
        $email = $customer['email'];
    }
    if(empty ($number)){
        $number = $customer['number'];
    }
    if(empty ($password)){
        $password = $customer['password'];
    }
    $newCustomer = array(
            "first_name" => $firstName,
            "email" => $email,
            "number" => $number,
            "password" => $password,

    );
    $affected = $customer->update($newCustomer);
    header("location: start-shopping.php");
    ?>
