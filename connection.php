<?php
 include "notorm/NotORM.php";
$pdo = new PDO("mysql:dbname=market-comparator","root");
$db = new NotORM($pdo);
?>
