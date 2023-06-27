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
  <link rel="stylesheet" href="teachers.css" />
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
              <li><a href="addTeacher.php">Add new teacher</a></li>
            </ul>
          </li>
          <li><a href="../students/students.php">Students</a></li>
          <li>
            <ul>
              <li><a href="../students/addStudent.php">Add new Student</a></li>
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


  <div class="home">
    <p>Home - All Teachers List</p>
    <img src="../photos/ofppt.png" alt="">
  </div>
  <main>
      <header>
        <p class="all">All Teachers</p>
        <p><a href="addTeacher.php  ">Add a new teacher</a></p>
      </header>
      <hr>
      <table  style='border-collapse: collapse' class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Subject</th>
            <th>Class</th>
            <th>Section</th>
            <th>Adress</th>
            <th>Date of birth</th>
            <th>Mobile number</th>
            <th>E-Mail</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class='tbody'>
          <?php
          include_once '../../db_connect.php';
          $sql = "SELECT * FROM teachers WHERE teacher_id <> 0;";
          $res = $cone->prepare($sql);
          $res->execute();
          while($row = $res->fetch()){
            echo "
            <tr>
            <td>$row[teacher_id]</td>
            <td><img src='teacherPhotos/$row[photo_path]' alt=''></td>
            <td>$row[first_name]</td>
            <td>$row[gender]</td>
            <td>$row[subject]</td>
            <td>$row[class_number]</td>
            <td>$row[section]</td>
            <td>$row[adress]</td>
            <td>$row[date_of_birth]</td>
            <td>$row[phone_number]</td>
            <td>$row[email]</td>
            <td>
              <button><a href='viewTeacherInfo.php?id=$row[teacher_id]'><img src='../photos/eye.png' alt=''></a></button>
              <button><a href='modifierTeacher.php?id=$row[teacher_id]'><img src='../photos/edit.png' alt=''></a></button>
              <button><a href='deleteTeacher.php/?id=$row[teacher_id]'><img src='../photos/delete.png' alt=''></a></button>
            </td>
          </tr>
            ";
          }
          ?>
        </tbody>
      </table>
  </main>

</div>
  <script src="teacher.js"></script>
</body>

</html>