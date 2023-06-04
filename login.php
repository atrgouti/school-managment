<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <nav>
        <h1>OFPPT</h1>
        <ul>
            <li>contact Us</li>
        </ul>
    </nav>
    <div class="container">
        <form action="" method="post">
            <p>Sign in to your account</p>
            <label for="">Email Adress</label>
            <input type="text" name="email">
            <label for="">Password</label>
            <input type="password" name="password">
            <select name="select_option" id="">
                <option value="admin">Admin</option>
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>
                <option value="parent">Parent</option>
            </select>
            <button name='submit' type="submit">Sign in</button>
        </form>
    </div>


    <?php
    if(isset($_POST['submit'])){
        if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])){
            if($_POST['select_option'] === "admin"){
                include_once "db_connect.php";
                $sql = 'SELECT * FROM admin Where email=? AND passcode=?';
                $res = $cone->prepare($sql);
                $res->execute(array($_POST['email'], $_POST['password']));
                if($res->rowCount() > 0){
                    session_start();
                    $_SESSION['username'] = $_POST['select_option'];
                    header("location: pages/dashboard.php");
                }else{
                    echo "email or password uncorrect";
                }
            }
        }else{
            echo 'please fill all the feilds';
        }
    }
    ?>
</body>
</html>