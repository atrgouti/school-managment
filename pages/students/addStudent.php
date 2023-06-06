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
          <li><a href="#">Meetings</a></li>
          <li><a href="#">Recent</a></li> 
          <li><a href="../logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- start working on the page -->
  <div class="home">
    <p>Home - Admin</p>
    <img src="../photos/ofppt.png" alt="">
  </div>
  <main>
        <header>
        <p class="all">Add student form</p>
        <hr>
        </header>
        <div class="content">
            <p style='margin-left:20px;'>Student information</p>
            <form action="" class="studentFrom" id='form1'>
                <div class="name feilds">
                    <label for="">First Name</label><br>
                    <input type="text">
                </div>
                <div class="last feilds">
                    <label for="">Last Name</label><br>
                    <input type="text">
                </div>
                <div class="class feilds">
                    <label for="">Class Name</label><br>
                    <input type="text">
                </div>
                <div class="section feilds">
                    <label for="">Section</label><br>
                    <select name="" id="">
                      <option value="">A</option>
                      <option value="">B</option>
                      <option value="">C</option>
                      <option value="">D</option>
                      <option value="">E</option>
                    </select>
                </div>
                <div class="section feilds">
                    <label for="">Gender</label><br>
                    <select name="" id="">
                      <option value="">Male</option>
                      <option value="">Famale</option>
                    </select>
                </div>
                <div class="section feilds">
                    <label for="">Date of birth</label><br>
                    <input type="date" placeholder="dd/mm/yyy">
                </div>
                <div class="section feilds">
                    <label for="">Id Num</label><br>
                    <input type="text">
                </div>
                <div class="section feilds">
                    <label for="">Email</label><br>
                    <input type="email">
                </div>
                <div class="section feilds">
                    <label for="">Upload teacher photo(150px * 150px)</label><br>
                    <input type="file">
                </div>
            </form> 
            <p style='margin-left:20px;'>Parents information</p>
            <form action=""  class="studentFrom" id='form2'>
                <div class="name feilds">
                    <label for="">Father Name</label><br>
                    <input type="text">
                </div>
                <div class="last feilds">
                    <label for="">Mother Name</label><br>
                    <input type="text">
                </div>
                <div class="class feilds">
                    <label for="">Father occupation</label><br>
                    <input type="text">
                </div>
                <div class="class feilds">
                    <label for="">Mother occupation</label><br>
                    <input type="text">
                </div>
                <div class="class feilds">
                    <label for="">Phone Number</label><br>
                    <input type="text">
                </div>
                <div class="class feilds">
                    <label for="">Nationality</label><br>
                    <input type="text">
                </div>
                <div class="class feilds">
                    <label for="">Present Adress</label><br>
                    <input type="text">
                </div>
                <div class="class feilds">
                    <label for="">Premenant Adress</label><br>
                    <input type="text">
                </div>
                <div class="section feilds">
                    <label for="">Upload teacher photo(150px * 150px)</label><br>
                    <input type="file">
                </div>
                <div class="section feilds">
                </div>
            </form>
            <button onclick="submitForms()" class="submit">Add teacher</button>
            <button onclick="resetAllInputs()"  type="reset" class="reset">Reset</button>
        </div>
    </main> 
</div>

<script src="addStudent.js"></script>

</body>

</html>