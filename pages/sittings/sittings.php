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
  <link rel="stylesheet" href="sittings.css" />
  <link rel="icon" type="image/x-icon" href="../photos/navlogo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
        // Function to load content from the server
        function loadContent(url) {
            $.ajax({
                url: url,
                type: "GET",
                success: function(response) {
                    // Update the content of a specific element on the page
                    $('#content').html(response);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        }
    </script>
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
          <li><a href="../../logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>


  <div class="home">
    <p>Home - sittings</p>
    <img src="../photos/ofppt.png" alt="">
  </div>
  <main>
      <header>
        <p class="all">Profile sittings</p>
      </header>
      <hr>
      <div class="sittings">
        <div class="catogories">
          <ul>
            <li><a href="#" onclick="loadContent('addAdmin.php'); return false;">Add New Admin</a></li>
            <li><a href="#" onclick="loadContent('changePass.php'); return false;">Change Admin Password</a></li>
            <li><a href="#" onclick="loadContent('page3.php'); return false;">Logout</a></li>
          </ul>
        </div>
        <div class="edit" id="content">
          <div class="space">

          </div>
        </div>
      </div>
      
  </main>


</div>



  <script src="sittings.js"></script>
</body>

</html>