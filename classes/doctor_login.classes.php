<?php
session_start();
class doctorLogin extends dbh_connection{
    public function getDoctor($username,$password){
        $query = 'SELECT * from doctors WHERE d_username=? OR d_email=?';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([$username,$username])){
             header('location: ../index.php?error = stmtfailed');
             exit();
        }
        if($stmt->rowCount() == 0){
            header('location: ../doctorlogin.php?error=userdoesnotexist');
            exit();
        } 
        else if($stmt->rowCount() > 0){
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $checkpassword = password_verify($password,$result['d_password']);
            if($checkpassword){
                $_SESSION['doctorlogin'] = $result['d_username'];
                $_SESSION['doctorimg'] = $result['d_imagesource'];
                header('location: ../doctor.php?success');
                exit();
            }
            else{
                header("location: ../doctorlogin.php?error=passworddoesnotmatch");
                exit();
            }
        }
    }
}


?>