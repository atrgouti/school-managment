<?php
class BasseDonne{
    public $db;
    public function connection() {
        try{
            $dsn = 'mysql:host=localhost;dbname=test';
            $username = 'root';
            $password = '';
            $db = NEW PDO($dsn, $username, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            if($db){
                echo 'nice it worked';
            }
            return $db;
        }catch(PDOException $e){
            echo 'error'.$e->getMessage();
        }
    }
}
?>