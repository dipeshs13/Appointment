<?php
class login_controller extends login{
   
   private $userName;
   
   private $password;
   

   

   public function __construct($userName,$password){
   
    $this->userName = $userName;
   
    $this->password = $password;
   
   }
   public function loginUser(){
    if($this->emptyInput()==false){
      header('location:../index.php?error=emptyInput');
      exit();
    }
   
    $this->getUser($this->userName,$this->password);
   }
   private function emptyInput(){
    $result = true;
    if( empty($this->userName) || empty($this->password)){
      $result = false;
    }
    return $result;
   }




}





?>