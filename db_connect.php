<?php
$dsn = 'mysql:host=localhost;dbname=managment_db';
$usename = 'root';
$password = '';
try{
    $cone = new PDO($dsn, $usename, $password);
    if($cone){
        echo "connected";
    }
}catch (PDOException $e){
    echo "there is an error". $e;
}
?>