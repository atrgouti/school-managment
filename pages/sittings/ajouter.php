<?php
include '../../db_connect.php';
$sql = 'INSERT INTO admin(email, passcode) VALUES (?, ?)';
$res = $cone->prepare($sql);
$res->execute(array($_POST['username'], $_POST['passcode']));
if($res){
    header('location: sittings.php');
}
?>