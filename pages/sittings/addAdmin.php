<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .account{
            display: flex;
            justify-content: space_between;
            width: 50%;
            margin-top:10px;
            margin-bottom: 20px;
        }
        .account input{
            padding: 10px 20px;
            margin-top: 10px;
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
</head>
<body>
    <h1>1 Avaliable Admin Acounts</h1>
    <?php
    include "../../db_connect.php";
    $sql = 'SELECT * FROM admin';
    $res = $cone->prepare($sql);
    $res->execute();
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
    </div>
        ";
    }
    ?>
   
    <h1>Add New Admin Account</h1>
    <form action='ajouter.php' method='post'>
        <table>
            <tr>
                <td><label for="">Username</label></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td><label for="">Password</label></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td><button type='submit'>Add Admin</button></td>
            </tr>
        </table>
    </form>
</body>
</html>