<?php 
include_once '../../db_connect.php';
$id = $_GET['id'];
$sql = 'DELETE FROM teachers WHERE teacher_id=?';
$res = $cone->prepare($sql);
$res->execute(array($id));
if($res){
    header("location: ../teachers.php");
}
?>