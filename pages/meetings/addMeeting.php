<?php
        if(isset($_POST['submit'])){
            include_once '../../db_connect.php';
          $sql2 = 'INSERT INTO meetings(title, date, time, location) VALUES (?, ?, ?, ?)';
          $res2 = $cone->prepare($sql2);
          $res2->execute(array($_POST['title'], $_POST['date'], $_POST['time'], $_POST['location']));
          if($res2){
            header("location: meetings.php");
          }
        }
        ?>