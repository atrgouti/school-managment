<?php
include "../../db_connect.php";
$sql = 'DELETE FROM admin WHERE admin_id = ?';
$res = $cone->prepare($sql);
$res->execute(array($_GET['id']));
if($res){
    header("location: sittings.php");
}
?>