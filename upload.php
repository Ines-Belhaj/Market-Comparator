<?php

// https://www.w3schools.com/php/php_file_upload.asp

$target_dir = "pics/";
$file_name = basename($_FILES["image"]["name"]);
$target_file = $target_dir . $file_name;

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
  echo "The file $file_name has been uploaded.";
} else {
  echo "Sorry, there was an error uploading your file.";
}


include "connection.php";
$product = array(
    "..." => $number,
    // ...
    "image"=> $target_file,
);
$row = $db->product()->insert($product);/
