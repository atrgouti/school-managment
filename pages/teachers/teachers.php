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
          <li><a href="#">Home</a></li>
          <li><a href="../teachers/teachers.php">Teachers</a></li>
          <li>
            <ul>
              <li><a href="">Add new teacher</a></li>
            </ul>
          </li>
          <li><a href="">Students</a></li>
          <li>
            <ul>
              <li><a href="#">Add new Student</a></li>
            </ul>
          </li>
          <li><a href="#">Parents</a></li>
          <li><a href="#">Meetings</a></li>
          <li><a href="#">Recent</a></li> 
          <li><a href="../logout.php">Logout</a></li>
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
        <p class="all">All Teachers</p>
        <hr>
      </header>
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Photo</th>
            <td>Photo</td>
            <td>Name</td>
            <td>Gender</td>
            <td>Subject</td>
            <td>Class</td>
            <td>Section</td>
            <td>Adress</td>
            <td>Date of birth</td>
            <td>Mobile num</td>
            <td>E-Mail</td>
            <td>Action</td>
          </tr>
        </thead>
      </table>
  </main>

</div>
  <script src="teacher.js"></script>
</body>

</html>