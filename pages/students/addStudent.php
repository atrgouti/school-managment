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
  <link rel="stylesheet" href="addStudent.css" />
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
          <li><a href="students.php">Students</a></li>
          <li>
            <ul>
              <li><a href="addStudent.php">Add new Student</a></li>
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
    <p>Home - Student Admit Form</p>
    <img src="../photos/ofppt.png" alt="">
  </div>
  <main>
        <header>
        <p class="all">Add student form</p>
        <hr>
        </header>
        <div class="content">
            <p style='margin-left:20px;'>Student information</p>
            <form action="process.php" method='post' class="studentFrom" id='form1'>
                <div class="name feilds">
                    <label for="">First Name</label><br>
                    <input type="text" name='student_firstname'>
                </div>
                <div class="last feilds">
                    <label for="">Last Name</label><br>
                    <input type="text" name='student_lastname'>
                </div>
                <div class="class feilds">
                    <label for="">Class Number</label><br>
                    <select name="student_classnumber" id="">
                      <option value='' disabled selected></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                </div>
                <div class="section feilds">
                    <label for="">Section</label><br>
                    <select name="student_section" id="">
                      <option value='' disabled selected></option>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                      <option value="D">D</option>
                      <option value="E">E</option>
                    </select>
                </div>
                <div class="section feilds">
                    <label for="">Gender</label><br>
                    <select name="student_gender" id="">
                      <option value='' disabled selected></option>
                      <option value="">Male</option>
                      <option value="">Famale</option>
                    </select>
                </div>
                <div class="section feilds">
                    <label for="">Date of birth</label><br>
                    <input type="date" placeholder="dd/mm/yyy" name='student_date_of_birth'>
                </div>
                <div class="section feilds">
                    <label for="">Email</label><br>
                    <input type="email" name='student_email'>
                </div>
                <div class="section feilds">
                    <label for="">Account password</label><br>
                    <input type="password" name='student_account_pass'>
                </div>
                <div class="section feilds">
                    <label for="">Choose a teacher</label><br>
                    <select name="student_section" id="" required>
                      <option value='' disabled selected></option>
                      <?php
                        include_once '../../db_connect.php';
                        $sqlteacher = "SELECT * FROM teachers";
                        $resteahcher = $cone->prepare($sqlteacher);
                        $resteahcher->execute();
                        while($rowteacher = $resteahcher->fetch()){
                          echo "
                          <option value='$rowteacher[teacher_id]'>$rowteacher[first_name] $rowteacher[last_name]</option>
                          ";
                        }
                        ?>
                    </select>
                </div>
                <div class="section feilds">
                    <label for="">Upload teacher photo(150px * 150px)</label><br>
                    <input type="file" name='student_photo'>
                </div>
            <p style='margin-left:20px; width:100%;'>Parents information</p>
                <div class="name feilds">
                    <label for="">Father Name</label><br>
                    <input type="text" name='father_name'>
                </div>
                <div class="last feilds">
                    <label for="">Mother Name</label><br>
                    <input type="text" name='mother_name'>
                </div>
                <div class="class feilds">
                    <label for="">Father occupation</label><br>
                    <input type="text" name='father_occupation'>
                </div>
                <div class="class feilds">
                    <label for="">Mother occupation</label><br>
                    <input type="text" name='mother_occupation'>
                </div>
                <div class="class feilds">
                    <label for="">Phone Number</label><br>
                    <input type="text" name='phone_number'>
                </div>
                <div class="class feilds">
                    <label for="">Nationality</label><br>
                    <input type="text" name='nationality'>
                </div>
                <div class="class feilds">
                    <label for="">Present Adress</label><br>
                    <input type="text" name='present_adress'>
                </div>
                <div class="class feilds">
                    <label for="">Premenant Adress</label><br>
                    <input type="text" name='premenant_adress'>
                </div>
                <div class="section feilds">
                    <label for="">Upload teacher photo(150px * 150px)</label><br>
                    <input type="file" name='parent_photo'>
                </div>
                <div class="section feilds">
                </div>
                <button class="submit" type='submit'>Add teacher</button>
                <button onclick="resetAllInputs()"  type="reset" class="reset">Reset</button>
            </form>
        </div>
    </main> 
</div>

<?php
if(isset($_POST['submit'])){
  $image_student_place = $_FILES['student_photo']['tmp_name'];
  $image_student_name = $_FILES['student_photo']['name'];
  $image_student_error = $_FILES['student_photo']['error'];

  $image_parent_place = $_FILES['parent_photo']['tmp_name'];
  $image_parent_name = $_FILES['parent_photo']['name'];
  $image_parent_error = $_FILES['parent_photo']['error'];
  if($image_student_error === 0 && $image_parent_error == 0){
    move_uploaded_file($image_student_place, 'studentPhotos/'.$image_student_name);
    move_uploaded_file($image_parent_place, 'parentPhotos/'.$image_parent_name);
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
<script src="addStudent.js"></script>

</body>

</html>