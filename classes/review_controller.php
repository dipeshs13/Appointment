<?php
class Review_controller extends Review_classes{
    private $doctorid;
    private $userid;
    private $review;
    

    public function __construct($doctorid, $userid,$review){
        $this->doctorid = $doctorid;
        $this->userid = $userid;
        $this->review = $review;
    }
   
    public function review(){
        if($this->emptyinput()==false){
            header('location:../Book.php?doctor_id='.$this->doctorid.'?error=emptyinput');
            exit();
        }

    $this->post_review($this->doctorid,$this->userid,$this->review);
    }

    private function emptyinput(){
        $result = true;
        if(empty($this->review)){
            $result = false;
        }
        return $result;
    }
}


?>