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
  <link rel="stylesheet" href="viewStudent.css" />
  <title>Add new teacher</title>
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
        <div class="mix" style='display: flex; justify-content: space-between; align-items: center;'>
          <p class="all">Bilal Details</p>
          <a href="./students.php" class='return'>Return</a>
        </div>
        <hr>
        </header>
        <div class="infos">
          <?php
          $studentsql = 'SELECT * FROM students WHERE student_id=?';
          $studentres = $cone->prepare($studentsql);
          $studentres->execute(array($_GET['id']));
          while($row = $studentres->fetch()){
            $_SESSION['kidsName'] = $row['first_name'];
            echo "
            <img src='studentPhotos/$row[photo_path]'>
            <table>
              <tr>
                <td>ID:</td>
                <td>$row[student_id]</td>
              </tr>
              <tr>
                <td>First Name</td>
                <td>$row[first_name]</td>
              </tr>
              <tr>
                <td>Last Name</td>
                <td>$row[last_name]</td>
              </tr>
              <tr>
                <td>Class Number</td>
                <td>$row[class_number]</td>
              </tr>
              <tr>
                <td>Section</td>
                <td>$row[section]</td>
              </tr>
              <tr>
                <td>Gender</td>
                <td>$row[gender]</td>
              </tr>
              <tr>
                <td>Date of birth:</td>
                <td>$row[date_of_birth]</td>
              </tr>
              <tr>
                <td>email</td>
                <td>$row[email]</td>
              </tr>

            </table>
            ";
          }
          ?>
  
        </div>
        <hr>
        <p class="all"><?php echo $_SESSION['kidsName']."'s Father"?></p>
        <div class="infos">
        <?php
        $idparent = $_GET['id2'];
        $parentsql = 'SELECT * FROM parents WHERE parent_id=?';
        $parentres = $cone->prepare($parentsql);
        $parentres->execute(array($idparent));
        while($row = $parentres->fetch()){
          echo"
          <img src='parentPhotos/$row[photo_path]'>
            <table>
              <tr>
                <td>parent id:</td>
                <td>$row[parent_id]</td>
              </tr>
              <tr>
                <td>Father Name:</td>
                <td>$row[father_name]</td>
              </tr>
              <tr>
                <td>Mother Name:</td>
                <td>$row[mother_name]</td>
              </tr>
              <tr>
                <td>Father Occupation:</td>
                <td>$row[father_occupation]</td>
              </tr>
              <tr>
                <td>Mother Occupation:</td>
                <td>$row[mother_occupation]</td>
              </tr>
              <tr>
                <td>Phone Number:</td>
                <td>$row[phone_num]</td>
              </tr>
              <tr>
                <td>Nationality:</td>
                <td>$row[nationality]</td>
              </tr>
              <tr>
                <td>Present Adress:</td>
                <td>$row[present_adress]</td>
              </tr>
              <tr>
                <td>Temporary Adress:</td>
                <td>$row[temporary_adress]</td>
              </tr>
            </table>
          ";
        }
        ?>
    
        </div>
  </main>

</div>



<script src="viewStudent.js"></script>

</body>

</html>