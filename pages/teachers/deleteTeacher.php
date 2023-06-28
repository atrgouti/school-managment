<?php 
session_start();
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
}

$sqlname = "SELECT first_name, last_name FROM teachers WHERE teacher_id=?";
$nameres = $cone->prepare($sqlname);
$nameres->execute(array($_GET['id']));
while($za = $nameres->fetch()){
    $_SESSION['studina'] = $za['first_name'];
    $_SESSION['studila'] = $za['last_name'];
}
//insert activity  in activities table
$currentDate = date('Y-m-d');
$title = 'Teacher has been deleted';
$decription = "You deleted a Teacher called " . $_SESSION['studina'] .' '. $_SESSION['studila'];
$currentTime = date('H:i:s');

$sqlActivities = 'INSERT INTO `activities`(`datee`, `title`, `description`, `timee`) VALUES (?, ?, ?, ?)';
$resActivities = $cone->prepare($sqlActivities);
$resActivities->execute(array($currentDate, $title, $decription, $currentTime));
if($resActivities){
    header("location: teachers.php");
}
//sasasasasasasas
?>