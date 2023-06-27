<?php 
include_once '../../db_connect.php';
$id = $_GET['id'];
$id2 = $_GET['id2'];
$sql = 'DELETE FROM education WHERE student_id=?';
$res = $cone->prepare($sql);
$res->execute(array($id));
if($res){
    $sql2 = 'DELETE FROM students WHERE student_id=?';
    $res2 = $cone->prepare($sql2);
    $res2->execute(array($id));
    if($res2){
        $sql3 = 'DELETE FROM parents WHERE parent_id=?';
        $res3 = $cone->prepare($sql3);
        $res3->execute(array($id2));
        if($res3){
            header("location: students.php");
        }
    }
}
?>