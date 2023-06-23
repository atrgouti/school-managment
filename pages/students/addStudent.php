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
            <form action="" method='post' class="studentFrom" id='form1' enctype="multipart/form-data">
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
                    <select name="student_classnumber">
                      <option value='no' disabled selected></option>
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
                      <option value='no' disabled selected></option>
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
                      <option value="Male">Male</option>
                      <option value="Famale">Famale</option>
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
                    <select name="teacher_id" id="" required>
                      <option value='' disabled selected></option>
                      <?php
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
                    <label for="">Upload student photo(150px * 150px)</label><br>
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
                <button class="submit" type='submit' name='submit'>Add teacher</button>
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
  if($image_parent_error == 0 && $image_student_error == 0){
    move_uploaded_file($image_student_place, 'studentPhotos/'.$image_student_name);
    move_uploaded_file($image_parent_place, 'parentPhotos/'.$image_parent_name);
    // inserting parent information first becouse of the forigen key 
    $sqlparent = 'INSERT INTO parents(father_name, mother_name, father_occupation, mother_occupation, phone_num, nationality, present_adress, temporary_adress, photo_path) Values(?, ?, ?, ?, ?, ?, ?, ?, ?)';
    $resparent = $cone->prepare($sqlparent);
    $resparent->execute(array($_POST['father_name'], $_POST['mother_name'], $_POST['father_occupation'], $_POST['mother_occupation'], $_POST['phone_number'], $_POST['nationality'], $_POST['present_adress'], $_POST['premenant_adress'], $image_parent_name));

    // select the father id to add it as forigen in student id 
    $sqlgetid = 'SELECT parent_id FROM parents WHERE father_name=? AND mother_name=?';
    $resgetid = $cone->prepare($sqlgetid);
    $resgetid->execute(array($_POST['father_name'], $_POST['mother_name']));
    while($row = $resgetid->fetch()){
      $myidddd = $row['parent_id'];
    }

    //insert student into students table
    $studi = "INSERT INTO students(first_name, last_name, class_number, section, gender, date_of_birth, email, photo_path, account_pass, parent_id) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $studeres = $cone->prepare($studi);
    $studeres->execute(array($_POST['student_firstname'], $_POST['student_lastname'], $_POST['student_classnumber'], $_POST['student_section'], $_POST['student_gender'], $_POST['student_date_of_birth'], $_POST['student_email'], $image_student_name, $_POST['student_account_pass'], $myidddd));
  
    // select the student id to add it the education
        $sqlgetid2 = 'SELECT student_id FROM students WHERE first_name=? AND last_name=?';
        $resgetid2 = $cone->prepare($sqlgetid2);
        $resgetid2->execute(array($_POST['student_firstname'], $_POST['student_lastname']));
        while($parentRow = $resgetid2->fetch()){
          $studantidu = $parentRow['student_id'];
        }


    //insert into education table the id of student and teacher
    $education ="INSERT INTO education(student_id, teacher_id) VALUES(?, ?)";
    $resEducation = $cone->prepare($education);
    $resEducation->execute(array($studantidu, $_POST['teacher_id']));

    if($resEducation){
      echo 'nice everyhing is up to date';
    }
  }
}
?>
<script src="addStudent.js"></script>

</body>

</html>