<?php
class doctorlogin_controller extends doctorLogin {
    private $username;
    private $password;

    public function __construct($username,$password){
        $this->username = $username;
        $this->password = $password;
    }

    public function loginDoctor(){
        if($this->empty_Input()==false){
            header('location: ../doctorlogin.php?error=emptyInput');
            exit();
        }
    $this->getDoctor($this->username,$this->password);
    }

    private function empty_Input(){
        $result = true;
        if(empty($this->username) || empty($this->password)){
            $result = false;
        }
        return $result;
    }
}

?>