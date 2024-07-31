<?php
session_start();
$title = "Menu";
include "template-market.php";
include "connection.php";
$market_id = $_SESSION['id'];
$popularityMarket = $db->popularity("market_id = ? ", $market_id)->fetch();
$popularity = $popularityMarket['popularity'];
$totalPopularity = 0;
foreach ($db->popularity() as $market)
{
    $totalPopularity += $market['popularity'];
}
$percentage = $popularity / $totalPopularity;

 $popularity_market = $db->popularity()
    ->order("popularity desc")
;
$i=0;
foreach ($popularity_market as $market) {
  $i++;
  // echo ($i." ".$market['market_id']."\n");

    if ($market_id == $market['market_id'])
    {
       $rank = $i;
    }

}


header  ("location: graph-orders.php");


?>

<p>You had <?php  echo $popularity ?> orders in total</p>

<p> You have <?php echo $percentage;  ?> % from all orders</p>

<p>You are classified <?php echo $rank ;?> from all markets </p>
