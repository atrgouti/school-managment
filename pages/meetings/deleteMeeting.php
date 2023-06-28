<?php
include_once '../../db_connect.php';
$sql = 'DELETE FROM meetings WHERE meeting_id=?';
$res = $cone->prepare($sql);
$res->execute(array($_GET['id']));
if($res){
    header("location: meetings.php");
}
?>