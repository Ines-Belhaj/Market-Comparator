<?php

include "notorm/NotORM.php"; //include "path of the documents using /"
$pdo = new PDO("mysql:dbname=marketcomparator","root");
$db = new NotORM($pdo);

?>
