<?php
include '../../db_connect.php';
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
  <link rel="stylesheet" href="students.css" />
  <title>All Students</title>
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
          <li><a href="students.php">Students</a></li>
          <li>
            <ul>
              <li><a href="addStudent.php">Add new Student</a></li>
            </ul>
          </li>
          <li><a href="../parents/parents.php">Parents</a></li>
          <li><a href="../meetings/meetings.php">Meetings</a></li>
          <li><a href="../recentActivities/recent.php">Recent</a></li> 
          <li><a href="../../logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>


  <div class="home">
    <p>Home - All Students</p>
    <img src="../photos/ofppt.png" alt="">
  </div>
  <main>
      <header>
        <p class="all">All Students</p>
        <p><a href="addStudent.php">Add a new Student</a></p>
      </header>
      <hr>
      <table  style='border-collapse: collapse' class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Full Name</th>
            <th>Gender</th>
            <th>Parents Name</th>
            <th>Class</th>
            <th>Section</th>
            <th>Date of birth</th>
            <th>E-Mail</th>
            <th>Teacher's Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class='tbody'>
          <?php
          $sql = "SELECT * FROM students";
          $sqlres = $cone->prepare($sql);
          $sqlres->execute();
          while($rowibo = $sqlres->fetch()){
            // this function to get fathers name 
            $getparentsql = 'SELECT father_name FROM parents WHERE parent_id=?';
            $resparent = $cone->prepare($getparentsql);
            $resparent->execute(array($rowibo['parent_id']));
            while($parintonamo = $resparent->fetch()){
              $theparent = $parintonamo['father_name'];
            }

            //this function to get teachers id from education 
            $educationsql = "SELECT teacher_id FROM education WHERE student_id=?";
            $reseducation = $cone->prepare($educationsql);
            $reseducation->execute(array($rowibo["student_id"]));
            while($idvalue = $reseducation->fetch()){
              $teacherId = $idvalue['teacher_id'];
            }

            
            // this function to get teachers name from teachers 
            $teachersql = "SELECT first_name FROM teachers WHERE teacher_id=?";
            $teacherresult = $cone->prepare($teachersql);
            $teacherresult->execute(array($teacherId));
            while($teacherRow = $teacherresult->fetch()){
              $teacherFirstName = $teacherRow['first_name'];
            }

            
            echo "
            <tr>
            <td>$rowibo[student_id]</td>
            <td><img src='studentPhotos/$rowibo[photo_path]' alt=''></td>
            <td>$rowibo[first_name] $rowibo[last_name]</td>
            <td>$rowibo[gender]</td>
            <td>$theparent</td>
            <td>$rowibo[class_number]</td>
            <td>$rowibo[section]</td>
            <td>$rowibo[date_of_birth]</td>
            <td>$rowibo[email]</td>
            <td>$teacherFirstName</td>
            <td>
              <button><a href='viewStudent.php?id=$rowibo[student_id]&id2=$rowibo[parent_id]'><img src='../photos/eye.png' alt=''></a></button>
              <button><a href='modifierStudent.php?id=$rowibo[student_id]&id2=$rowibo[parent_id]'><img src='../photos/edit.png' alt=''></a></button>
              <button onClick='confirmDelete()'><a href='deleteStudent.php?id=$rowibo[student_id]&id2=$rowibo[parent_id]'><img src='../photos/delete.png' alt=''></a></button>
            </td>
            </tr>
            ";
          }
          ?>
        </tbody>
      </table>
  </main>

</div>
  <script src="students.js"></script>
</body>

</html>