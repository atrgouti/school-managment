<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location: ../login.php");
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
  <link rel="stylesheet" href="parents.css" />
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
          <li><a href="#">Meetings</a></li>
          <li><a href="#">Recent</a></li> 
          <li><a href=".../logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>


  <div class="home">
    <p>Home - Admin</p>
    <img src="../photos/ofppt.png" alt="">
  </div>
  <main>
      <header>
        <p class="all">All Parents</p>
        
      </header>
      <hr>
      <table  style='border-collapse: collapse' class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Father's Occupation</th>
            <th>Adress</th>
            <th>Email</th>
            <th>Kids</th>
            <th>Kids Name</th>
            <th>Mobile number</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class='tbody'>
          <tr>
            <td>1</td>
            <td><img src="../photos/father.jpg" alt=""></td>
            <td>Abdolah</td>
            <td>Fatima</td>
            <td>Dentist</td>
            <td>Hay el amal</td>
            <td>btrgouti@gmail.co</td>
            <td>1</td>
            <td>Bilal</td>
            <td>0614598765</td>
            <td>
              <button><a href="viewTeacherInfo.html"><img src="../photos/eye.png" alt=""></a></button>
            </td>
          </tr>
        </tbody>
      </table>
  </main>

</div>
  <script src="parents.js"></script>
</body>

</html>