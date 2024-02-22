<?php
class database_connection{
    // public function connected(){
    //     return $this->connect();
    // }
    protected function connect(){
        try{
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'doctor';
            $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "connect successfuly";
        }
        catch(PDOException $e){
            die(''.$e->getMessage());
        }
    }
}
// $connection  = new database_connection();
// $connection->connected();


?>