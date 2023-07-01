<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location: ../login.php");
}
//getting the number of teachers are in the teachers table based on counting columns
include_once '../db_connect.php';
$sqlteacher = 'SELECT COUNT(*) AS teacher FROM teachers';
$resTeacher = $cone->prepare($sqlteacher);
$resTeacher->execute();
while($numteachers = $resTeacher->fetch()){
  $_SESSION['numTeacher'] = $numteachers['teacher'] - 1;
}

//count how maney students are in students table
include_once '../db_connect.php';
$sqlstudent = 'SELECT COUNT(*) AS student FROM students';
$resstudent = $cone->prepare($sqlstudent);
$resstudent->execute();
while($numstudent = $resstudent->fetch()){
  $_SESSION['numStudent'] = $numstudent['student'];
}

//count how maney parents are in parents table
include_once '../db_connect.php';
$sqlParent = 'SELECT COUNT(*) AS parent FROM parents';
$resparent = $cone->prepare($sqlParent);
$resparent->execute();
while($numParent = $resparent->fetch()){
  $_SESSION['numParent'] = $numParent['parent'];
}

//count how maney admins are in admin table
include_once '../db_connect.php';
$sqlAdmin = 'SELECT COUNT(*) AS admins FROM admin';
$resAdmin = $cone->prepare($sqlAdmin);
$resAdmin->execute();
while($numAdmin = $resAdmin->fetch()){
  $_SESSION['numAdmin'] = $numAdmin['admins'];
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
  <link rel="icon" type="image/x-icon" href="./photos/navlogo.png">
  <title>EduAdmin</title>
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
    <h1 data-val="<?php echo $_SESSION['numStudent']; ?>" class="nums">000</h1>
  </div>


  <div class="teachers">
    <span>
      <img src="./photos/teacherr.png" alt="">
      <p>Teachers</p>
    </span>
    <div class="line"></div>
    <h1 class="nums" data-val="<?php echo $_SESSION['numTeacher'];?>">000</h1>
  </div>


  <div class="parents">
    <span>
      <img src="./photos/parent.png" alt="">
      <p>Parents</p>
    </span>
    <div class="line"></div>
    <h1 class="nums" data-val="<?php echo $_SESSION['numParent'] ?>">000</h1>
  </div>


  <div class="totalearnings">
    <span>
      <img src="./photos/admin.png" alt="">
      <p>Admins</p>
    </span>
    <div class="line"></div>
    <h1 class="nums" data-val="<?php echo $_SESSION['numAdmin'] ?>">0</h1>
  </div>


  <div class="calinder">
    <div class="displo">
      <p class="recent">Recent Activities</p>
      <p><a href="recentActivities/recent.php">View All Activities</a></p>
    </div>
    <div class="line2"></div><?php
    //select activities from activities table by the newest
    $sqlACT = 'SELECT * FROM activities ORDER BY activity_id DESC LIMIT 15';
    $resACT = $cone->prepare($sqlACT);
    $resACT->execute();
    while($rowACT = $resACT->fetch()){
      $currentDateTime = date('Y-m-d H:i:s');
      $activityDate = $rowACT['datee'];
      $activityTime = $rowACT['timee'];

      // Convert the activity date/time and current date/time to timestamps
      $activityTimestamp = strtotime($activityDate . ' ' . $activityTime);
      $currentTimestamp = strtotime($currentDateTime);

       // Calculate the time difference in seconds
      $timeDifference = $currentTimestamp - $activityTimestamp;

      // Convert the time difference to the desired format
      $minutes = floor($timeDifference / 60);
      $hours = floor($timeDifference / (60 * 60));
      $days = floor($timeDifference / (60 * 60 * 24));



    ?>
    <div class='noti test'>
      <div class='left'>
      <p class='date'><?php echo $rowACT['datee']?></p>
      <p class='teacher'><?php echo $rowACT['title']?></p>
      <p class='message'><?php echo $rowACT['description']?></p>
      </div>
      <div class='right'>
        <p class='exact'><?php if ($days >= 1) {
          echo $days . ' day(s) ago';
        } elseif ($hours >= 1) {
            echo $hours . ' hour(s) ago';
        } else {
            echo $minutes . ' minute(s) ago';
        }?></p>
      </div>
    </div>
    <?php } ?>
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
      <p><a class="addmeeting" href="meetings/meetings.php">View All Meetigns</a></p>
    </span>
    <div class="line2"></div>
    <div class="meeting">
      <p style="font-weight: bold;">Lastest meeting</p>
      <?php
      //selecting the latest meeting in the table
      $sql = "SELECT * FROM meetings ORDER BY meeting_id DESC LIMIT 1";
      $res = $cone->prepare($sql);
      $res->execute();
      while($row = $res->fetch()){
        echo"
        <p><span class='bold'>Title: </span>$row[title]</p>
        <p><span class='bold'>Date: </span>$row[date]</p>
        <p><span class='bold'>Time: </span>$row[time]</p>
        <p><span class='bold'>Location: </span>$row[location]</p>
        ";
      }
      ?>
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
          <li><a href="./meetings/meetings.php">Meetings</a></li>
          <li><a href="./recentActivities/recent.php">Recent</a></li> 
          <li><a href="./sittings/sittings.php">Sittings</a></li> 
          <li><a href="../logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>

</div>
  <script src="script.js"></script>
</body>

</html>