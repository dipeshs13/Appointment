<?php
class User_data extends dbh_connection{
   
    public function getUserInfo($userid){
        $query = "SELECT * from users where u_id=?";
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([$userid])){
            header("location: ../index.php?stmtfailed");
            exit();
        }
        return $stmt->fetchAll();
    }
}


?>