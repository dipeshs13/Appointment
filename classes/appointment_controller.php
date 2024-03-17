<?php
class Appointment_controller extends Appointment{
    private $date;
    private $time;
    private $doctorid;
    private $userid;

    public function __construct($date,$time,$doctorid,$userid){
        $this->date = $date;
        $this->time = $time;
        $this->doctorid = $doctorid;
        $this->userid = $userid;
    }
    public function handle_appointment(){
        if($this->empty()==false){
            header("location:../appointment.php?emptyinput");
            exit();
        }
        if($this->bookAppointment()==false){
            header("location:../appointment.php?invaliddate");
            exit();
        }
     $this->set_appointment($this->doctorid,$this->userid,$this->date,$this->time);
    }
    private function empty(){
        $result = true;
        if(empty($this->date) || empty($this->time)){
            $result = false;
        }
        return $result;
    }
    private function bookAppointment(){
        $result = true;
        $today_date = date('Y-m-d');

        if(strtotime($this->date) < strtotime($today_date)){
            $result = false;
        }
        return $result;
    }
}



?>