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

$sqlname = "SELECT first_name, last_name FROM teachers WHERE teacher_id=?";
$nameres = $cone->prepare($sqlname);
$nameres->execute(array($_GET['id']));
while($za = $nameres->fetch()){
    $student_firstname = $za['first_name'];
    $student_lastname = $za['last_name'];
}
//insert activity  in activities table
$currentDate = date('Y-m-d');
$title = 'Teacher has been deleted';
$decription = "You deleted a Teacher called " . $student_firstname  .' '. $student_lastname;
$currentTime = date('H:i:s');

$sqlActivities = 'INSERT INTO `activities`(`datee`, `title`, `description`, `timee`) VALUES (?, ?, ?, ?)';
$resActivities = $cone->prepare($sqlActivities);
$resActivities->execute(array($currentDate, $title, $decription, $currentTime));
//sasasasasasasas
?>