<?php
class dbh_connection{
    protected function connect(){
        try{
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'appointment';
            $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "connect successfuly";
            return $pdo;
        }
        catch(PDOException $e){
            die(''.$e->getMessage());
        }
    }
}



?>