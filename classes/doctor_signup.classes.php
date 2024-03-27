<?php

class doctorSignup extends dbh_connection{
    public function setDoctor($fullname,$username,$email,$phone,$password,$category,$hName,$hlocation,$folder,$doctorimage,$experienced,$qualification,){
        $query = 'INSERT INTO doctors (d_fullname,d_username,d_email,d_phone,d_password,d_category,d_cilinics,d_clocation,d_imagesource,d_image,d_experienced,d_qualification) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
        $stmt = $this->connect()->prepare($query);

        $hashed_Password = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute([$fullname,$username,$email,$phone,$hashed_Password,$category,$hName,$hlocation,$folder,$doctorimage,$experienced,$qualification])){
            header('location: ../index.php?error=stmtfailed');
            exit();
        }
       
    }
   

    public function checkDoctor($username,$email){
        $query = 'SELECT d_username from doctors WHERE d_username=? OR d_email=?';

        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([$username,$email])){
             header('location: ../doctorsignup.php?error=stmtfailed');
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