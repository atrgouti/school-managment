<?php 
include_once '../../db_connect.php';
session_start();
$getNom = "SELECT * FROM students WHERE student_id=?";
$getResult = $cone->prepare($getNom);
$getResult->execute(array($_GET['id']));
while($names = $getResult->fetch()){
    $_SESSION['promierNom'] = $names['first_name'];
}


//insert activity  in activities table 
$currentDate = date('Y-m-d');
$title = 'Student has been deleted';
$decription = "You deleted a Student called ".$_SESSION['promierNom'];
$currentTime = date('H:i:s');

$sqlActivities = 'INSERT INTO `activities`(`datee`, `title`, `description`, `timee`) VALUES (?, ?, ?, ?)';
$resActivities = $cone->prepare($sqlActivities);
$resActivities->execute(array($currentDate, $title, $decription, $currentTime));

//sasasasasasasas




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