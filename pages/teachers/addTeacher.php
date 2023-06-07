<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
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
          <li><a href="#">Parents</a></li>
          <li><a href="#">Meetings</a></li>
          <li><a href="#">Recent</a></li> 
          <li><a href="../logout.php">Logout</a></li>
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
            <form action="" class="studentFrom">
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
                    <label for="">Subject</label><br>
                    <select name="" id="">
                      <option value="">Math</option>
                      <option value="">Arabic</option>
                      <option value="">Pysics</option>
                      <option value="">SVT</option>
                      <option value="">History</option>
                    </select>
                </div>
                <div class="section feilds">
                    <label for="">Email</label><br>
                    <input type="email">
                </div>
                <div class="section feilds">
                    <label for="">Phone number</label><br>
                    <input type="number">
                </div>
                <div class="section feilds">
                    <label for="">Adress</label><br>
                    <input type="text">
                </div>
                <div class="section feilds">
                    <label for="">Upload teacher photo(150px * 150px)</label><br>
                    <input type="file">
                </div>
                <div class="section feilds">
                  <button type="submit" class="submit">Add teacher</button>
                  <button type="reset" class="reset">Reset</button>
                </div>
            </form> 
        </div>
    </main>

</div>



<script src="addTeacher.js"></script>

</body>

</html>