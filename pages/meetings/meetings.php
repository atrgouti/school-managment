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
  <link rel="stylesheet" href="meetings.css" />
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
    <p>Home - All meetings list</p>
    <img src="../photos/ofppt.png" alt="">
  </div>
  <main>
      <header>
        <p class="all">All Meetings</p>
        <p class="newMeeting"><a href="#" class="open-button">Add a new meetinggggg</a></p> 
      </header>
      <hr>
      <table  style='border-collapse: collapse' class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class='tbody'>
          <tr>
            <td>1</td>
            <td>School meeting</td>
            <td>6/7/2023</td>
            <td>15:00 - 16:00</td>
            <td>Office</td>
            <td>
                <a href="viewparent.php"><button>Done</button></a>
            </td>
          </tr>
        </tbody>
      </table>
  </main>
  <dialog class="modal" id="modal">
    <h3><a href="">Add a new meeting</h3>
    <form action="">
        <table>
            <tr>
                <td><label for="">Tile</label></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td><label for="">Date</label></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td><label for="">Time</label></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td><label for="">Location</label></td>
                <td><input type="text"></td>
            </tr>
            <tr class='btn'>
                <td><button type="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</dialog>


</div>



  <script src="meetings.js"></script>
</body>

</html>