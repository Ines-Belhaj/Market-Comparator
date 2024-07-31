<?php
session_start();

$market_id = $_SESSION['id'];

$name = $_GET['name'];
$price = $_GET['price'];
$barecode = $_GET['barecode'];
$category = $_GET['category'];

include "connection.php";



$product = $db->product("market_id = ? AND barecode= ?", $market_id,$barecode)->fetch();


   if ( $product )
        {
            header("Location: exist-product.php");
        }
    else{
        $productKind = $db->product_kind("name = ? AND category = ?", $name, $category)->fetch();
        if(!$productKind) {
          $productKind = array(
            'name' => $name,
            'category' => $category,
          );
          $row = $db->product_kind()->insert($productKind);
        }

        $product =  array(
          "market_id" => $market_id,
          "name" => $name,
          "price" => $price,
          "barecode" => $barecode,
          "category" => $category
        );
        $row = $db->product()->insert($product);

        header("Location: new-product.php");
    };
?>
</body>
</html>
