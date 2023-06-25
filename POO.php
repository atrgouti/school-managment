<?php 
include "includes/newclass.inc.php";
$obje = new BasseDonne;
$db = $obje->connection();
$sql = "select * from personal";
$res = $db->prepare($sql);
$res->execute();
?>