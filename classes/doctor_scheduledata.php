<?php
class Doctorscheduleinfo extends dbh_connection{
    public function schedule($doctorid){
     $query = 'SELECT * FROM doctor_schedule where doctor_id = ?';
     $stmt = $this->connect()->prepare($query);
     if(!$stmt->execute([$doctorid])){
        header("location:../appointment.php?error=stmtfailed");
        exit();
     }
     $doctorSchedule = $stmt->fetchAll();
     return $doctorSchedule;
    }
}



?>