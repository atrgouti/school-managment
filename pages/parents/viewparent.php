<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location: ../../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="viewparent.css" />
  <title>Netflix Mobile Navigation</title>
</head>
<body>
  
<div class="container">
  <button class="nav-btn open-btn">
    <i class="fas fa-bars"></i>
  </button>

  <div class="nav nav-black">
    <div class="nav nav-red">
      <div class="nav nav-white">
        <button class="nav-btn close-btn">
          <i class="fas fa-times"></i>
        </button>

        <img
          src="../photos/ofppt.png"
          alt="Logo" class="logo">

        <ul class="list">
          <li><a href="../dashboard.php">Home</a></li>
          <li><a href="../teachers/teachers.php">Teachers</a></li>
          <li>
            <ul>
              <li><a href="../teachers/addTeacher.php">Add new teacher</a></li>
            </ul>
          </li>
          <li><a href="../students/students.php">Students</a></li>
          <li>
            <ul>
              <li><a href="../students/addStudent.php">Add new Student</a></li>
            </ul>
          </li>
          <li><a href="parents.php">Parents</a></li>
          <li><a href="../meetings/meetings.php">Meetings</a></li>
          <li><a href="../recentActivities/recent.php">Recent</a></li> 
          <li><a href="../../logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- start working on the page -->
  <div class="home">
    <p>Home - Parent Details</p>
    <img src="../photos/ofppt.png" alt="">
  </div>
  <main>
        <header>
        <p class="all">Bilal Details</p>
        <hr>
        </header>
        <div class="infos">
          <?php
          include_once '../../db_connect.php';
          $sql = 'SELECT * FROM parents WHERE parent_id=?';
          $res = $cone->prepare($sql);
          $res->execute(array($_GET['id']));
          while($row = $res->fetch()){
            echo"
            <img src='../students/parentPhotos/$row[photo_path]' alt=''>
          <table>
            <tr>
              <td>Father's name:</td>
              <td>$row[father_name]</td>
            </tr>
            <tr>
              <td>Mother's name:</td>
              <td>$row[mother_name]</td>
            </tr>
            <tr>
              <td>Father's Occupation:</td>
              <td>$row[father_occupation]</td>
            </tr>
            <tr>
              <td>Mother's Occupation:</td>
              <td>$row[mother_occupation]</td>
            </tr>
            <tr>
              <td>Present Adress:</td>
              <td>$row[present_adress]</td>
            </tr>
            <tr>
              <td>temperary adress:</td>
              <td>$row[temporary_adress]</td>
            </tr>
            <tr>
              <td>Nationality:</td>
              <td>$row[nationality]</td>
            </tr>
            <tr>
              <td>Phone number:</td>
              <td>$row[phone_num]</td>
            </tr>
          </table>
            ";
          }
          ?>
          
        </div>

        <header>
        <p class="all">Bilal's Kid Details</p>
        <hr>
        </header>

        <div class="infos">
          <?php
          $sql2 = 'SELECT * FROM students WHERE student_id=?';
          $res2 = $cone->prepare($sql2);
          $res2->execute(array($_GET['id2']));
          while($row2 = $res2->fetch()){
            echo"
            <img src='../students/studentPhotos/$row2[photo_path]' alt=''>
          <table>
            <tr>
              <td>Name:</td>
              <td>$row2[first_name] $row2[last_name]</td>
            </tr>
            <tr>
              <td>Gender:</td>
              <td>$row2[gender]</td>
            </tr>
            <tr>
              <td>Class</td>
              <td>$row2[class_number]</td>
            </tr>
            <tr>
              <td>Section</td>
              <td>$row2[section]</td>
            </tr>
            <tr>
              <td>Date of birth:</td>
              <td>$row2[date_of_birth]</td>
            </tr>
            <tr>
              <td>Email:</td>
              <td>$row2[email]</td>
            </tr>
          </table>
            ";
          }
          ?>
          
        </div>
        
  </main>

</div>



<script src="viewparent.js"></script>

</body>

</html>