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
    <p>Home - Student Modifey Form</p>
    <img src="../photos/ofppt.png" alt="">
  </div>
  <main>
        <header>
        <div class="splayo">
          <p class="all">Modifey Student</p>
          <p><a href="students.php">return</a></p>
        </div>
        <hr>
        </header>
        <div class="content">
            <p style='margin-left:20px;'>Student information</p>
            <form action="" method='post' class="studentFrom" id='form1' enctype="multipart/form-data">
              <?php
                include '../../db_connect.php';
                $studentId = $_GET['id'];
              $sqladam = "SELECT * FROM students JOIN parents ON students.parent_id = parents.parent_id WHERE student_id =?";
              $res = $cone->prepare($sqladam);
              $res->execute(array($studentId));
              while($str = $res->fetch()){
                echo"
                <div class='name feilds'>
                    <label for=''>First Name</label><br>
                    <input value='$str[first_name]' type='text' name='student_firstname'>
                </div>
                <div class='last feilds'>
                    <label for=''>Last Name</label><br>
                    <input value='$str[last_name]' type='text' name='student_lastname'>
                </div>
                <div class='class feilds'>
                    <label for=''>Class Number</label><br>
                    <input value='$str[class_number]'  name='student_classnumber'>
                </div>
                <div class='section feilds'>
                    <label for=''>Section</label><br>
                    <input name='student_section' value='$str[section]'>
                </div>
                <div class='section feilds'>
                    <label for=''>Gender</label><br>
                    <input name='student_gender' value='$str[gender]'>
                </div>
                <div class='section feilds'>
                    <label for=''>Date of birth</label><br>
                    <input value='$str[date_of_birth]' type='date' placeholder='dd/mm/yyy' name='student_date_of_birth'>
                </div>
                <div class='section feilds'>
                    <label for=''>Email</label><br>
                    <input value='$str[email]' type='email' name='student_email'>
                </div>
                <div class='section feilds'>
                    <label for=''>Account password</label><br>
                    <input value='$str[account_pass]' type='text' name='student_account_pass'>
                </div>
                ";
              }

              ?>
                
                <div class="section feilds">
                    <label for="">Choose a teacher</label><br>
                    <select name="teacher_id" id="" required>
                      <!-- <option value='no teacher' disabled selected>Choose a teacher</option> -->
                      <?php
                      $techo = 'SELECT * FROM teachers WHERE teacher_id <> 0';
                      $resT = $cone->prepare($techo);
                      $resT->execute();
                      while($rowT = $resT->fetch()){
                        echo "
                        <option value='$rowT[teacher_id]'>$rowT[first_name] $rowT[last_name]</option>
                        ";
                      }
                      ?>
                      
                    </select>
                </div>
            <p style='margin-left:20px; width:100%;'>Parents information</p>
            <?php 
            $idp2 = $_GET['id2'];
            $sqlP = 'SELECT * FROM parents WHERE parent_id=?';
            $resP = $cone->prepare($sqlP);
            $resP->execute(array($idp2));
            while($rowp = $resP->fetch()){
              echo"
              <div class='name feilds'>
                    <label for=''>Father Name</label><br>
                    <input type='text' name='father_name' value='$rowp[father_name]'>
                </div>
                <div class='last feilds'>
                    <label for=''>Mother Name</label><br>
                    <input type='text' name='mother_name' value='$rowp[mother_name]'>
                </div>
                <div class='class feilds'>
                    <label for=''>Father occupation</label><br>
                    <input type='text' name='father_occupation' value='$rowp[father_occupation]'>
                </div>
                <div class='class feilds'>
                    <label for=''>Mother occupation</label><br>
                    <input type='text' name='mother_occupation' value='$rowp[mother_occupation]'>
                </div>
                <div class='class feilds'>
                    <label for=''>Phone Number</label><br>
                    <input type='text' name='phone_number' value='$rowp[phone_num]'>
                </div>
                <div class='class feilds'>
                    <label for=''>Nationality</label><br>
                    <input type='text' name='nationality' value='$rowp[nationality]'>
                </div>
                <div class='class feilds'>
                    <label for=''>Present Adress</label><br>
                    <input type='text' name='present_adress' value='$rowp[present_adress]'>
                </div>
                <div class='class feilds'>
                    <label for=''>Premenant Adress</label><br>
                    <input type='text' name='premenant_adress' value='$rowp[temporary_adress]'>
                </div>
                <div class='section feilds'>
                </div>
              ";
            }

            ?>
                
                <button class="submit" type='submit' name='submit'>Add Student</button>
                <button onclick="resetAllInputs()"  type="reset" class="reset">Reset</button>
            </form>
        </div>
    </main> 
</div>

<?php
if(isset($_POST['submit'])){
  $sqlEdu = 'UPDATE education SET teacher_id = ? WHERE student_id = ?';
  $resEdu = $cone->prepare($sqlEdu);
  $resEdu->execute(array($_POST['teacher_id'], $_GET['id']));
  if($resEdu){
    $sqlPar = "UPDATE parents SET father_name=?, mother_name=?, father_occupation=?, mother_occupation=?, phone_num=?, nationality=?, present_adress=?, temporary_adress=? WHERE parent_id=?";
    $resPar = $cone->prepare($sqlPar);
    $resPar->execute(array($_POST['father_name'], $_POST['mother_name'], $_POST['father_occupation'], $_POST['mother_occupation'], $_POST['phone_number'], $_POST['nationality'], $_POST['present_adress'], $_POST['premenant_adress'], $_GET['id2']));
    if($resPar){
      $sqlStu = "UPDATE students SET first_name= ?,last_name=?, class_number=?, section=?, gender=?, date_of_birth=?, email =?,account_pass=? WHERE student_id=?";
      $resStu = $cone->prepare($sqlStu);
      $resStu->execute(array($_POST['student_firstname'], $_POST['student_lastname'], $_POST['student_classnumber'], $_POST['student_section'], $_POST['student_gender'], $_POST['student_date_of_birth'], $_POST['student_email'], $_POST['student_account_pass'], $_GET['id']));
      if($resStu){
        echo 'everything is updated';
      }
    }
    
  }
}
?>
<script src="addStudent.js"></script>

</body>

</html>