<?php
include_once '../../db_connect.php';

session_start();
$getNom = "SELECT * FROM teachers WHERE teacher_id=?";
$getResult = $cone->prepare($getNom);
$getResult->execute(array($_GET['id']));
while ($names = $getResult->fetch()) {
  $_SESSION['promierNomtit'] = $names['first_name'];
}

$id = $_GET['id'];
$sqledu = "UPDATE education SET teacher_id = 0 WHERE teacher_id = ?";
$resedu = $cone->prepare($sqledu);
$resedu->execute(array($id));
if ($resedu) {
  $sql = 'DELETE FROM teachers WHERE teacher_id=?';
  $res = $cone->prepare($sql);
  $res->execute(array($id));
  if ($res) {
    //insert activity in activities table
    $currentDate = date('Y-m-d');
    $title = 'Teacher has been deleted';
    $decription = "You deleted a Teacher called " . $_SESSION['promierNomtit'];
    $currentTime = date('H:i:s');

    $sqlActivities = 'INSERT INTO `activities`(`datee`, `title`, `description`, `timee`) VALUES (?, ?, ?, ?)';
    $resActivities = $cone->prepare($sqlActivities);
    $resActivities->execute(array($currentDate, $title, $decription, $currentTime));

    header("location: teachers.php");
    exit(); // Add exit to stop executing the rest of the code
  }
}


?>