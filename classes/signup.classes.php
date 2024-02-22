<?php
include("../includes/dbh.inc.php");

class Signup extends database_connection{
    public function setUser($fullName,$userName,$email,$address,$phone,$password,$dateofBirth){
      $query = 'INSERT INTO users (u_fullname,u_username,u_email,u_address,u_phone,u_password,u_dob) VALUES (?,?,?,?,?,?,?)';
      $stmt = $this->connect()->prepare($query);

      $hashed_Password = password_hash($password, PASSWORD_DEFAULT);

      if(!$stmt->execute([$fullName,$userName,$email,$address,$phone,$hashed_Password,$dateofBirth])){
        header('location:../index.php?error=stmtfailed');
        exit();
      }
     
    }
    public function checkUser($username,$email){
        $query = 'SELECT u_username from users where u_username=? OR u_email = ?';
        $stmt = $this->connect()->prepare($query);

        if(!$stmt->execute([$username,$email])){
            header('location:../index.php?error=stmtfailed');
            exit();
        }
        $result = true;
        if($stmt->rowCount() > 0){
            $result = false;
        } 
        return $result;
    }
}





?>