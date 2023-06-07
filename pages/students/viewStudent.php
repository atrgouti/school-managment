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
          <li><a href="#">Meetings</a></li>
          <li><a href="#">Recent</a></li> 
          <li><a href="../logout.php">Logout</a></li>
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
        <p class="all">Bilal Details</p>
        <hr>
        </header>
        <div class="infos">
          <img src="../photos/kid1.jpg" alt="">
          <table>
            <tr>
              <td>ID:</td>
              <td>Bilal Lakhchin</td>
            </tr>
            <tr>
              <td>Gender:</td>
              <td>Male</td>
            </tr>
            <tr>
              <td>Father's name:</td>
              <td>Abdo</td>
            </tr>
            <tr>
              <td>Mother's name:</td>
              <td>Fatime</td>
            </tr>
            <tr>
              <td>Class:</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Section</td>
              <td>C</td>
            </tr>
            <tr>
              <td>Class:</td>
              <td>2</td>
            </tr>
            <tr>
              <td>Adress:</td>
              <td>Hay el amal el gharbi</td>
            </tr>
            <tr>
              <td>Date of birth:</td>
              <td>15/05/2002</td>
            </tr>
            <tr>
              <td>Mobile number:</td>
              <td>0659742365</td>
            </tr>
            <tr>
              <td>E-Mail:</td>
              <td>btrgouti@gmail.com</td>
            </tr>

          </table>
        </div>
  </main>

</div>



<script src="viewStudent.js"></script>

</body>

</html>