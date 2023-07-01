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
  <link rel="stylesheet" href="recent.css" />
  <link rel="icon" type="image/x-icon" href="../photos/navlogo.png">
  <title>EduAdmin</title>
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
          <li><a href="../parents/parents.php">Parents</a></li>
          <li><a href="../meetings/meetings.php">Meetings</a></li>
          <li><a href="recent.php">Recent</a></li> 
          <li><a href="../sittings/sittings.php">Sittings</a></li> 
          <li><a href="../../logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>


  <div class="home">
    <p>Home - All Recent Activities</p>
    <img src="../photos/ofppt.png" alt="">
  </div>
  <main>
      <header>
        <p class="all">All Activities</p>
      </header>
      <hr>
      <table  style='border-collapse: collapse' class="table">
        <thead>
          <tr>
            <th>Title</th>
            <th>Date</th>
            <th>Description</th>
            <th>Time</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class='tbody'>
          <?php
          include_once '../../db_connect.php';
          $sql = 'SELECT * FROM activities ORDER BY activity_id DESC';
          $res = $cone->prepare($sql);
          $res->execute();
          while($row = $res->fetch()){
            $currentDateTime = date('Y-m-d H:i:s');
            $activityDate = $row['datee'];
            $activityTime = $row['timee'];

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
          <tr>
            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['datee'] ?></td>
            <td><?php echo $row['description'] ?></td>
            <td><?php if ($days >= 1) {
          echo $days . ' day(s) ago';
        } elseif ($hours >= 1) {
            echo $hours . ' hour(s) ago';
        } else {
            echo $minutes . ' minute(s) ago';
        }?></td>
            <td>
                <a href='deleteActivity.php?id=<?php echo $row['activity_id'] ?>'><button>Delete</button></a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
  </main>


</div>



  <script src="recent.js"></script>
</body>

</html>