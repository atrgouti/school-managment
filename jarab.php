<?php
include_once 'db_connect.php';
$id = 17;
session_start();
$sqlname = "SELECT first_name, last_name FROM students WHERE student_id=?";
$nameres = $cone->prepare($sqlname);
$nameres->execute(array($id));
while($za = $nameres->fetch()){
    $_SESSION['abc'] = $za['first_name'];
    $_SESSION['dsc'] = $za['last_name'];
}

$baaa =  'salam'.$_SESSION['abc'];
echo $baaa
?>