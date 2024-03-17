<?php

class doctorSignup extends dbh_connection{
    public function setDoctor($firstname,$lastname,$username,$email,$address,$phone,$password,$category,$hName,$hlocation,$dateofbirth,$folder,$gender,$doctorimage,$experienced,$qualification){
        $query = 'INSERT INTO doctors (d_firstname,d_lastname,d_username,d_email,d_address,d_phone,d_password,d_category,d_cilinics,d_clocation,d_dob,d_imagesource,d_gender,d_image,d_experienced,d_qualification) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $stmt = $this->connect()->prepare($query);

        $hashed_Password = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute([$firstname,$lastname,$username,$email,$address,$phone,$hashed_Password,$category,$hName,$hlocation,$dateofbirth,$folder,$gender,$doctorimage,$experienced,$qualification])){
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