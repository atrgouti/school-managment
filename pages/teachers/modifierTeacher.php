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
    <p>Home - Modifier teacher</p>
    <img src="../photos/ofppt.png" alt="">
  </div>
  <main>
        <header>
        <div class="splayo">
          <p class="all">Teacher Information</p>
          <p><a href="teachers.php">return</a></p>
        </div>
        <hr>
        </header>
        <div class="content">
            <?php
                include_once '../../db_connect.php';
                $id = $_GET['id'];
                $sql = 'SELECT * FROM teachers WHERE teacher_id=?';
                $res = $cone->prepare($sql);
                $res->execute(array($id));
                while($row = $res->fetch()){
                    echo "
                        <form action='' method='post'  class='studentFrom' enctype='multipart/form-data'>
                        <div class='name feilds'>
                            <label for=''>First Name</label><br>
                            <input value='$row[first_name]' type='text' name='first_name' required>
                        </div>
                        <div class='last feilds'>
                            <label for=''>Last Name</label><br>
                            <input value='$row[last_name]' type='text' name='last_name' required>
                        </div>
                        <div class='class feilds'>
                            <label for=''>Class Number</label><br>
                            <input value='$row[class_number]' type='class_number'>
                        </div>
                        <div class='section feilds'>
                            <label for=''>Section</label><br>
                            <input value='$row[section]' type='text' name='section'>
                        </div>
                        <div class='section feilds'>
                            <label for=''>Gender</label><br>
                            <input value='$row[gender]' type='text' name='gender'>
                        </div>
                        <div class='section feilds'>
                            <label for=''>Date of birth</label><br>
                            <input value='$row[date_of_birth]' type='date' placeholder='dd/mm/yyy' name='dateofbirth' required>
                        </div>
                        <div class='section feilds'>
                            <label for=''>Subject</label><br>
                            <input value='$row[subject]' type='subject'>
                        </div>
                        <div class='section feilds'>
                            <label for=''>Email</label><br>
                            <input value='$row[email]' type='email' name='email' required>
                        </div>
                        <div class='section feilds'>
                            <label for=''>Phone number</label><br>
                            <input value='$row[phone_number]' type='number' name='number' required>
                        </div>
                        <div class='section feilds'>
                            <label for=''>Adress</label><br>
                            <input value='$row[adress]' type='text' name='adress' required>
                        </div>
                        <div class='section feilds'>
                            <label for=''>Joining Date</label><br>
                            <input value='$row[joining_date]' type='date' name='joindate' required>
                        </div>
                        <div class='section feilds'>
                            <label for=''>Account password</label><br>
                            <input value='$row[account_password]' type='text' name='accountpassword' required>
                        </div>
                        <div class='section feilds'>
                        <button type='submit' class='submit' name='submit'>modifey teacher</button>
                        <button type='reset' class='reset'>Reset</button>
                        </div>
                        </form> 
                    ";
                }
            ?>
        </div>
    </main>

</div>


<?php
if(isset($_POST['submit'])){
      include_once '../../db_connect.php';
      $sql = "UPDATE teachers SET first_name =?, last_name =?, class_number =?, section =? , gender =?, date_of_birth =?, `subject`='[value-8]',`email`='[value-9]',`phone_number`='[value-10]',`adress`='[value-11]',`joining_date`='[value-12]',`photo_path`='[value-13]',`account_password`='[value-14]' WHERE 1";
      $res = $cone->prepare($sql);

      $res->execute(array($_POST['first_name'], $_POST['last_name'], $_POST['class_number'], $_POST['section'], $_POST['gender'], $_POST['dateofbirth'], $_POST['subject'], $_POST['email'], $_POST['number'], $_POST['adress'], $_POST['joindate'], $_FILES['photo_path']['name'], $_POST['accountpassword']));
      if($res){
        echo 'the theacher '.$_POST['first_name'].'is added succefully';
      }
    }

?>
<script src="addTeacher.js"></script>

</body>

</html>