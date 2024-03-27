<?php
class doctor_schedule_controller extends doctor_schedule_classes{
    private $doctorid;
    // private $totalday;
    private $day_from;
    private $day_to;
    private $time_from;
    private $time_to;

    public function __construct($doctorid,$day_from,$day_to,$time_from,$time_to){
        $this->doctorid = $doctorid;
        // $this->totalday = $totalday;
        $this->day_from = $day_from;
        $this->day_to = $day_to;
        $this->time_from = $time_from;
        $this->time_to = $time_to;
    }

    public function Appointmentschedule(){
        if($this->emptyInput()==false){
            header("location: ../doctor.php?emptyinput");
            exit();
        }
    $this->schedule($this->doctorid,$this->day_from,$this->day_to,$this->time_from,$this->time_to);
    $this->update_schedule($this->doctorid,$this->day_from,$this->day_to,$this->time_from,$this->time_to);
    
    }

    private function emptyInput(){
        $result = true;
        if(empty($this->doctorid) || empty($this->day_from) || empty($this->day_to) || empty($this->time_from) || empty($this->time_to)){
            $result = false;
        }
        return $result;
    }

}


?>