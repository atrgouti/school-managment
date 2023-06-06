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
  <link rel="stylesheet" href="test.css" />
  <title>Netflix Mobile Navigation</title>
</head>

<body>
<div class="container">
  <button class="nav-btn open-btn">
    <i class="fas fa-bars"></i>
  </button>

  <div class="home">
    <p>Home - Admin</p>
    <img src="./photos/ofppt.png" alt="">
  </div>


  <div class="students">
    <span>
      <img src="./photos/student.png" alt="">
      <p>Students</p>
    </span>
    <div class="line"></div>
    <h1 data-val="350" class="nums">000</h1>
  </div>


  <div class="teachers">
    <span>
      <img src="./photos/teacherr.png" alt="">
      <p>Teachers</p>
    </span>
    <div class="line"></div>
    <h1 class="nums" data-val="200">000</h1>
  </div>


  <div class="parents">
    <span>
      <img src="./photos/parent.png" alt="">
      <p>Parents</p>
    </span>
    <div class="line"></div>
    <h1 class="nums" data-val="200">000</h1>
  </div>


  <div class="totalearnings">
    <span>
      <img src="./photos/money.png" alt="">
      <p>Earnings</p>
    </span>
    <div class="line"></div>
    <h1 class="nums" data-val="200">275$</h1>
  </div>


  <div class="calinder">
    <p class="recent">Recent Activities</p>
    <div class="line2"></div>
    <div class="noti test">
      <div class="left">
      <p class="date">16 May, 2017</p>
      <p class="teacher">Jeneyfer Lopez</p>
      <p class="message">added a new student called Mohamed</p>
      </div>
      <div class="right">
        <p class="exact">9 minuts ago</p>
      </div>
    </div>
    <div class="noti test">
      <div class="left">
      <p class="date">16 May, 2017</p>
      <p class="teacher">Jeneyfer Lopez</p>
      <p class="message">added a new student called Mohamed</p>
      </div>
      <div class="right">
        <p class="exact">12 minuts ago</p>
      </div>
    </div>
    <div class="noti test">
      <div class="left">
      <p class="date">16 May, 2017</p>
      <p class="teacher">Jeneyfer Lopez</p>
      <p class="message">added a new student called Mohamed</p>
      </div>
      <div class="right">
        <p class="exact">12 minuts ago</p>
      </div>
    </div>
    <div class="noti test">
      <div class="left">
      <p class="date">16 May, 2017</p>
      <p class="teacher">Jeneyfer Lopez</p>
      <p class="message">added a new student called Mohamed</p>
      </div>
      <div class="right">
        <p class="exact">12 minuts ago</p>
      </div>
    </div>
    <div class="noti test">
      <div class="left">
      <p class="date">16 May, 2017</p>
      <p class="teacher">Jeneyfer Lopez</p>
      <p class="message">added a new student called Mohamed</p>
      </div>
      <div class="right">
        <p class="exact">12 minuts ago</p>
      </div>
    </div>
  </div>


  <div class="facebook social">
    <span>
      <img src="./photos/facebook.png" alt="">
      <p>Follow Us<br>on Facebook</p>
    </span>
    <div class="line"></div>
    <h1>10,000</h1>
  </div>


  <div class="twitter social">
    <span>
      <img src="./photos/twitter.png" alt="">
      <p>Follow Us<br>on Twitter</p>
    </span>
    <div class="line"></div>
    <h1>10,000</h1>
  </div>


  <div class="google social">
    <span>
      <img src="./photos/google.png" alt="">
      <p>Follow Us<br>on Google</p>
    </span>
    <div class="line"></div>
    <h1>10,000</h1>
  </div>


  <div class="linkdlen social">
    <span>
      <img src="./photos/linkden.png" alt="">
      <p>Follow Us<br>on linkden</p>
    </span>
    <div class="line"></div>
    <h1>10,000</h1>
  </div>

  
  <div class="board">
    <span>
      <p class="recent">My Meetings</p>
      <p><a class="addmeeting" href="#">View All Meetigns</a></p>
    </span>
    <div class="line2"></div>
    <div class="meeting">
      <p style="font-weight: bold;">Lastest meeting</p>
      <p><span class="bold">Title: </span>Parent Association Meeting</p>
      <p><span class="bold">Date: </span>July 2, 2023</p>
      <p><span class="bold">Time: </span>6:30 PM - 8:00 PM</p>
      <p><span class="bold">Location: </span>School Auditorium</p>
    </div>
  </div>
  

  <div class="nav nav-black">
    <div class="nav nav-red">
      <div class="nav nav-white">
        <button class="nav-btn close-btn">
          <i class="fas fa-times"></i>
        </button>

        <img
          src="./photos/ofppt.png"
          alt="Logo" class="logo">

        <ul class="list">
          <li><a href="dashboard.php">Home</a></li>
          <li><a href="./teachers/teachers.php">Teachers</a></li>
          <li>
            <ul>
              <li><a href="./teachers/addTeacher.php">Add new teacher</a></li>
            </ul>
          </li>
          <li><a href="./students/students.php">Students</a></li>
          <li>
            <ul>
              <li><a href="./students/addStudent.php">Add new Student</a></li>
            </ul>
          </li>
          <li><a href="./parents/parents.php">Parents</a></li>
          <li><a href="#">Meetings</a></li>
          <li><a href="#">Recent</a></li> 
          <li><a href="../logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>

</div>
  <script src="script.js"></script>
</body>

</html>