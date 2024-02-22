<?php
class Signup_controller extends Signup{
   private $fullName;
   private $userName;
   private $email;
   private $address;
   private $phone;
   private $password;
   private $confirmPassword;

   private $dateofBirth;

   public function __construct($fullName,$userName,$email,$address,$phone,$password,$confirmPassword,$dateofBirth){
      
    $this->fullName = $fullName;
    $this->userName = $userName;
    $this->email = $email;
    $this->address = $address;
    $this->phone = $phone;
    $this->password = $password;
    $this->confirmPassword = $confirmPassword;
    $this->dateofBirth = $dateofBirth;
   }
   private function emptyInput(){
    $result = true;
    if(empty($this->fullName) || empty($this->userName) || empty($this->email) || empty($this->address) 
    || empty($this->phone) || empty($this->password) || empty($this->confirmPassword) || empty($this->dateofBirth)){
      $result = false;
    }
    return $result;
   }

   public function invalidUsername(){
    $result = false;
    $pattern = '/^[a-zA-Z0-9_]{5,}$/';
    if(!preg_match($pattern,$this->userName)){
        $result = false;
    }
    return $result;
   }

   private function invalidEmail(){
    $result = false;
    if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
        $result = false;
   }
   return $result;
}
   






}





?>