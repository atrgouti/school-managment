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
  <link rel="stylesheet" href="viewTeacherInfo.css" />
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
              <li><a href="../students/students.php">Add new Student</a></li>
            </ul>
          </li>
          <li><a href="../parents/parents.php">Parents</a></li>
          <li><a href="../meetings/meetings.php">Meetings</a></li>
          <li><a href="#">Recent</a></li> 
          <li><a href="../../logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- start working on the page -->
  <div class="home">
    <p>Home - Teacher Details</p>
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
          $id2 = $_GET['id'];
          $sql = 'SELECT * FROM teachers WHERE teacher_id=?';
          $res = $cone->prepare($sql);
          $res->execute(array($id2));
          while($row = $res->fetch()){
            echo "
          <img src='teacherPhotos/$row[photo_path]'>
          <table>
            <tr>
                <td>Name:</td>
                <td>$row[first_name]</td>
              </tr>
              <tr>
                <td>Gender:</td>
                <td>$row[gender]</td>
              </tr>
              <tr>
                <td>Date of birth:</td>
                <td>$row[date_of_birth]</td>
              </tr>
              <tr>
                <td>E-Mail:</td>
                <td>$row[email]</td>
              </tr>
              <tr>
                <td>Joining Date</td>
                <td>$row[joining_date]</td>
              </tr>
              <tr>
                <td>Subject:</td>
                <td>$row[subject]</td>
              </tr>
              <tr>
                <td>Class:</td>
                <td>$row[class_number]</td>
              </tr>
              <tr>
                <td>Section:</td>
                <td>$row[section]</td>
              </tr>
              <tr>
                <td>Id:</td>
                <td>$row[teacher_id]</td>
              </tr>
              <tr>
                <td>Adress:</td>
                <td>$row[adress]</td>
              </tr>
              <tr>
                <td>Phone:</td>
                <td>$row[phone_number]</td>
              </tr>
            ";
          }
          ?>
          </table>
        </div>
  </main>

</div>



<script src="viewTeacherInfo.js"></script>

</body>

</html>