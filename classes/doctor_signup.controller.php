<?php

class doctorController extends doctorSignup{
    private $firstname;
    private $lastname;
    private $username;
    private $email;
    private $address;
    private $phone;
    private $password;
    private $cPassword;
    private $category;

    private $hName;
    private $hlocation;
    private $dateofbirth;
    private $folder;
    private $gender;
    private $doctorimage;
    private $experienced;
    private $qualification;

    public function __construct($firstname,$lastname,$username,$email,$address,$phone,$password,$cPassword,$category,$hName,$hlocation, $dateofbirth, $folder, $gender, $doctorimage, $experienced,$qualification){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;
        $this->password = $password;
        $this->cPassword = $cPassword;
        $this->category = $category;
        $this->hName = $hName;
        $this->hlocation = $hlocation;
        $this->dateofbirth = $dateofbirth;
        $this->folder = $folder;
        $this->gender = $gender;
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

    $this->setDoctor($this->firstname,$this->lastname,$this->username,$this->email,$this->address,$this->phone,$this->password,$this->category,$this->hName,$this->hlocation,$this->dateofbirth,$this->folder,$this->gender,$this->doctorimage,$this->experienced,$this->qualification);

    }
    private function empty(){
        $result = true;
        if(empty($this->firstname) || empty($this->lastname) || empty($this->username) || empty($this->email) || empty($this->address) || empty($this->phone) || empty($this->password) || empty($this->cPassword) || 
       empty($this->category) || empty($this->hName) || empty($this->hlocation) || empty($this->dateofbirth) || empty($this->folder) ||   empty($this->gender) || empty($this->doctorimage) || empty($this->experienced)
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
        if(($this->password) != ($this->cPassword)){
            $result = false;
        }
        return $result;
    }

    private function doctorCheck(){
        $result = true;
        if(!$this->checkDoctor($this->username,$this->email)){
            $result = false;
        }
        return $result;
    }
}


?>