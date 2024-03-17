<?php
class Signup_controller extends Signup{
   private $firstname;
   private $lastname;
   private $userName;
   private $email;
   private $address;
   private $phone;
   private $password;
   private $confirmPassword;

   private $dateofBirth;

   public function __construct($firstname,$lastname,$userName,$email,$address,$phone,$password,$confirmPassword,$dateofBirth){
      
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->userName = $userName;
    $this->email = $email;
    $this->address = $address;
    $this->phone = $phone;
    $this->password = $password;
    $this->confirmPassword = $confirmPassword;
    $this->dateofBirth = $dateofBirth;
   }
   public function signupUser(){
    if($this->emptyInput()==false){
      header('location:../index.php?error=emptyInput');
      exit();
    }
    if($this->invalidUsername()==false){
      header('location:../index.php?error=invalidusername');
      exit();
    }
    if($this->invalidEmail()==false){
      header('location:../index.php?error=invalidEmail');
      exit();
    }
    if($this->pwdMatch()==false){
      header('location:../index.php?error=passworddoesnotmatch');
      exit();
    }
    if($this->userCheck()==false){
      header('location:../index.php?error=Useralreadyexist');
      exit();
    }
    $this->setUser($this->firstname,$this->lastname,$this->userName,$this->email,$this->address,$this->phone,$this->password,$this->dateofBirth);
   }
   private function emptyInput(){
    $result = true;
    if(empty($this->firstname) || empty($this->lastname) || empty($this->userName) || empty($this->email) || empty($this->address) 
    || empty($this->phone) || empty($this->password) || empty($this->confirmPassword) || empty($this->dateofBirth)){
      $result = false;
    }
    return $result;
   }

   public function invalidUsername(){
    $result = true;
    $pattern = '/^[a-zA-Z0-9_]{5,}$/';
    if(!preg_match($pattern,$this->userName)){
        $result = false;
    }
    return $result;
   }

   private function invalidEmail(){
    $result = true;
    if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
        $result = false;
   }
   return $result;
}

private function pwdMatch(){
  $result = true;
  if(($this->password) != ($this->confirmPassword)){
    $result = false;
  }
  return $result;
}
   

private function userCheck(){
  $result = true;
  if(!$this->checkUser($this->userName,$this->email)){
    $result = false;

  }
  return $result;
}




}





?>