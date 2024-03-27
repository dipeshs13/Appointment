<?php

class doctorController extends doctorSignup{
    // private $firstname;
    // private $lastname;
    private $fullname;
    private $username;
    private $email;
    // private $address;
    private $phone;
    private $password;
    private $cPassword;
    private $category;

    private $hName;
    private $hlocation;
    // private $dateofbirth;
    private $folder;
    
    private $doctorimage;
    private $experienced;
    private $qualification;

    
    public function __construct($fullname,$username,$email,$phone,$password,$cPassword,$category,$hName,$hlocation, $folder,  $doctorimage, $experienced,$qualification){
        // $this->firstname = $firstname;
        // $this->lastname = $lastname;
        $this->fullname = $fullname;
        $this->username = $username;
        $this->email = $email;
        // $this->address = $address;
        $this->phone = $phone;
        $this->password = $password;
        $this->cPassword = $cPassword;
        $this->category = $category;
        $this->hName = $hName;
        $this->hlocation = $hlocation;
        // $this->dateofbirth = $dateofbirth;
        $this->folder = $folder;
        // $this->gender = $gender;
        $this->doctorimage = $doctorimage;
        $this->experienced = $experienced;
        $this->qualification = $qualification;
        
        
    }

    public function signupDoctor(){
        var_dump($this->empty());
        if($this->empty() == false){
            header('location: ../doctorsignup.php?error=emptyInput');
            exit();
        }
        if($this->iUsername() == false){
            header('location: ../doctorsignup.php?error=invalidusername');
            exit();
        }
        if($this->iEmail() == false){
            header('location: ../doctorsignup.php?error=invalidemail');
            exit();
        }
        if($this->pMatch() == false){
            header('location: ../doctorsignup.php?error=passworddoesnotmatch');
            exit();
        }
        if($this->doctorCheck()==false){
            header('location: ../doctorsignup.php?error=useralreadyexist');
            exit();
        }

    $this->setDoctor($this->fullname,$this->username,$this->email,$this->phone,$this->password,$this->category,$this->hName,$this->hlocation,$this->folder,$this->doctorimage,$this->experienced,$this->qualification);

    }
    private function empty(){
        $result = true;
        if(empty($this->fullname) || empty($this->username) || empty($this->email) || empty($this->phone) || empty($this->password) || empty($this->cPassword) || 
       empty($this->category) || empty($this->hName) || empty($this->hlocation) || empty($this->folder) || empty($this->doctorimage) || empty($this->experienced)
       || empty($this->qualification)){

            $result = false;
        }
        return $result;
    }

    private function iUsername(){
        $result = true;
        $pattern = '/^[a-zA-Z0-9_]{5,}$/';
        if(!preg_match($pattern,$this->username)){
            $result = false;
        }
        return $result;
    }

    private function iEmail(){
        $result = true;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        return $result;
    }

    private function pMatch(){
        $result = true;
        if($this->password!= $this->cPassword){
            $result = false;
        }
        return $result;
    }

    // private function schedule(){
    //     $result = true;
    //     if(!strtotime($this->time_from) || !strtotime($this->time_to)){
    //         return false;
    //     }
    //     $fromtime = strtotime($this->time_from);
    //     $totime = strtotime($this->time_to);

    //     if($fromtime < strtotime('08:00:00') || $totime > strtotime('06:00:00')){
    //         return false;
    //     }
    //     return $result;
    // }
    private function doctorCheck(){
        $result = true;
        if(!$this->checkDoctor($this->username,$this->email)){
            $result = false;
        }
        return $result;
    }
}


?>