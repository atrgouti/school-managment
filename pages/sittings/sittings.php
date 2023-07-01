<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location: ../../login.php");
}
include "../../db_connect.php";
//count how maney admins are in admin table
$sqlAdmin = 'SELECT COUNT(*) AS admins FROM admin';
$resAdmin = $cone->prepare($sqlAdmin);
$resAdmin->execute();
while($numAdmin = $resAdmin->fetch()){
  $_SESSION['numAdmin'] = $numAdmin['admins'];
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
    <style>
        .account{
            display: flex;
            justify-content: space_between;
            align-items: end;
            width: 50%;
            margin-top:10px;
            margin-bottom: 20px;
        }
        .account input{
            padding: 10px 20px;
            margin-top: 10px;
        }
        .account button{
            padding: 10px 20px;
            background-color: #8C52FF;
            color: white;
            border: 1px solid #8C52FF;
            cursor: pointer;
        }
        form input{
            padding:10px 20px;
        }
        form button{
            padding: 10px 20px;
            background-color: black;
            color: white;
            margin-top:20px;
            cursor: pointer;
        }
    </style>
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
          <li><a href="sittings.php">Sittings</a></li> 
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
            <li><a href="sittings.php">Add New Admin</a></li>
            <li><a href="../../logout.php">Logout</a></li>
          </ul>
        </div>
        <div class="edit" id="content">
        <h1><?php echo $_SESSION['numAdmin']?>Avaliable Admin Acounts</h1>
        <div class='account'>
        <div class='userName'>
            <label for=''>User Name</label>
            <input type='text' value='admin' readonly>
        </div>
        <div class='password'>
            <label for=''>Password</label>
            <input type='text' name='' value='admin' id='' readonly>
        </div>
        </div>
    <?php
    $sql = 'SELECT * FROM admin WHERE email != ?';
    $res = $cone->prepare($sql);
    $res->execute(array("admin"));
    while($row = $res->fetch()){
        echo "
        <div class='account'>
        <div class='userName'>
            <label for=''>User Name</label>
            <input type='text' value='$row[email]' readonly>
        </div>
        <div class='password'>
            <label for=''>Password</label>
            <input type='text' name='' value='$row[passcode]' id='' readonly>
        </div>
        <a href='deleteAdmin.php?id=$row[admin_id]'><button>DELETE</button></a>
    </div>
        ";
    }
    ?>
   
    <h1>Add New Admin Account</h1>
    <form action='ajouter.php' method='post'>
        <table>
            <tr>
                <td><label for="">Username</label></td>
                <td><input type="text" name='username'></td>
            </tr>
            <tr>
                <td><label for="">Password</label></td>
                <td><input type="text" name='passcode'></td>
            </tr>
            <tr>
                <td><button type='submit'>Add Admin</button></td>
            </tr>
        </table>
    </form>
        </div>
      </div>
      
  </main>


</div>



  <script src="sittings.js"></script>
</body>

</html>