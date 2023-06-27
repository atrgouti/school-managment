<?php 
include_once '../../db_connect.php';
$id = $_GET['id'];
$sqledu = "UPDATE education
SET teacher_id = 0
WHERE teacher_id = ?";
$resedu = $cone->prepare($sqledu);
$resedu->execute(array($id));
if($resedu){
    $sql = 'DELETE FROM teachers WHERE teacher_id=?';
    $res = $cone->prepare($sql);
    $res->execute(array($id));
    if($res){
        header("location: ../teachers.php");
    }
}


?>