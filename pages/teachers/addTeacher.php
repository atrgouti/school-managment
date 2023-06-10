<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location: ../../login.php");
  exit();
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <meta charset="UTF-8" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="addTeacher.css" />
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
              <li><a href="addTeacher.php">Add new teacher</a></li>
            </ul>
          </li>
          <li><a href="../students/students.php">Students</a></li>
          <li>
            <ul>
              <li><a href="../students/addStudent.php">Add new Student</a></li>
            </ul>
          </li>
          <li><a href="../parents/parents.php">Parents</a></li>
          <li><a href="../meetings/meetings.php ">Meetings</a></li>
          <li><a href="#">Recent</a></li> 
          <li><a href="../../logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- start working on the page -->
  <div class="home">
    <p>Home - Add New Teacher</p>
    <img src="../photos/ofppt.png" alt="">
  </div>
  <main>
        <header>
        <p class="all">Teacher Information</p>
        <hr>
        </header>
        <div class="content">
            <form action="" method="post"  class="studentFrom" enctype="multipart/form-data">
                <div class="name feilds">
                    <label for="">First Name</label><br>
                    <input type="text" name="first_name" required>
                </div>
                <div class="last feilds">
                    <label for="">Last Name</label><br>
                    <input type="text" name="last_name" required>
                </div>
                <div class="class feilds">
                    <label for="">Class Number</label><br>
                    <select id="" name="class_number"> 
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                </div>
                <div class="section feilds">
                    <label for="">Section</label><br>
                    <select id="" name="section">
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                      <option value="D">D</option>
                      <option value="E">E</option>
                    </select>
                </div>
                <div class="section feilds">
                    <label for="">Gender</label><br>
                    <select name="gender" id="">
                      <option value="Male">Male</option>
                      <option value="Famale">Famale</option>
                    </select>
                </div>
                <div class="section feilds">
                    <label for="">Date of birth</label><br>
                    <input type="date" placeholder="dd/mm/yyy" name="dateofbirth" required>
                </div>
                <div class="section feilds">
                    <label for="">Subject</label><br>
                    <select name="subject" id="">
                      <option value="Math">Math</option>
                      <option value="Arabic">Arabic</option>
                      <option value="Pysics">Pysics</option>
                      <option value="SVT">SVT</option>
                      <option value="History">History</option>
                    </select>
                </div>
                <div class="section feilds">
                    <label for="">Email</label><br>
                    <input type="email" name="email" required>
                </div>
                <div class="section feilds">
                    <label for="">Phone number</label><br>
                    <input type="number" name="number" required>
                </div>
                <div class="section feilds">
                    <label for="">Adress</label><br>
                    <input type="text" name="adress" required>
                </div>
                <div class="section feilds">
                    <label for="">Joining Date</label><br>
                    <input type="date" name="joindate" placeholder="dd/mm/yyy" required>
                </div>
                <div class="section feilds">
                    <label for="">Account password</label><br>
                    <input type="password" name="accountpassword" required>
                </div>
                <div class="section feilds">
                    <label for="">Upload teacher photo(150px * 150px)</label><br>
                    <input type="file" name="photo_path" required>
                </div>
                <div class="section feilds">
                  <button type="submit" class="submit" name="submit">Add teacher</button>
                  <button type="reset" class="reset">Reset</button>
                </div>
            </form> 
        </div>
    </main>

</div>


<?php
if(isset($_POST['submit'])){
    $image_place = $_FILES['photo_path']['tmp_name'];
    $image_name = $_FILES['photo_path']['name'];
    $image_error = $_FILES['photo_path']['error'];
    if($image_error === 0){
      move_uploaded_file($image_place, 'teacherPhotos/'.$image_name);
      include_once '../../db_connect.php';
      $sql = 'INSERT INTO teachers(first_name, last_name, class_number, section, gender, date_of_birth , subject, email, phone_number, adress, joining_date, photo_path, account_password) Values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
      $res = $cone->prepare($sql);
      $res->execute(array($_POST['first_name'], $_POST['last_name'], $_POST['class_number'], $_POST['section'], $_POST['gender'], $_POST['dateofbirth'], $_POST['subject'], $_POST['email'], $_POST['number'], $_POST['adress'], $_POST['joindate'], $_FILES['photo_path']['name'], $_POST['accountpassword']));
      if($res){
        echo 'the theacher '.$_POST['first_name'].'is added succefully';
      }
    }
}
?>
<script src="addTeacher.js"></script>

</body>

</html>