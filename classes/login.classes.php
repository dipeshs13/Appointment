<?php
session_start();
class Login extends dbh_connection{
    public function getUser($userName,$password,){
      $query = 'SELECT * FROM users WHERE u_username = ? OR u_email = ?';
      $stmt = $this->connect()->prepare($query);

      

      if(!$stmt->execute([$userName,$userName])){
        header("location: ../index.php?error=stmtfailed");
        exit();
      }
      if($stmt->rowCount() == 0){
        header('location: ../login.php?error=usernotfound');
        exit();
      } 
      else if($stmt->rowCount() > 0){

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $checkpassword = password_verify($password,$result['u_password']);
        if($checkpassword) {
          $_SESSION['user_login'] = $result['u_username'];
          $_SESSION['name'] = $result['u_fullname'];
          header('location: ../index.php?success');
          exit();

        } else{
          header('location: ../index.php?error=passworddoesnotmatch');
          exit();
        }
      }


      
}

}





?>