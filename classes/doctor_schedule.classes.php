<?php
class doctor_schedule_classes extends dbh_connection{
    public function schedule($doctorid,$day_from,$day_to,$time_from,$time_to){
        $query = 'INSERT INTO doctor_schedule (doctor_id,ds_dayfrom,ds_dayto,time_from,time_to) VAlUES (?,?,?,?,?)';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([$doctorid,$day_from,$day_to,$time_from,$time_to])){
            header("location:../doctor.php?stmtfailed");
            exit();
        }
    }

    public function update_schedule($doctorid, $day_from, $day_to, $time_from, $time_to){
        $query = 'UPDATE doctor_schedule SET ds_dayfrom = ?, ds_dayto = ?, time_from = ?, time_to = ? WHERE doctor_id = ?';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([$day_from, $day_to, $time_from, $time_to, $doctorid])){
            
            header("location: ../index.php?stmtfailed");
            exit();
        }
    
        return true;
    }
    
    public function check_schedule_exist($doctorid){
        $query = "SELECT * FROM doctor_schedule WHERE doctor_id = ?";
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([$doctorid])){
            header("location: ../index.php?stmtfailed");
            exit();
        }
        $result = true;
        if($stmt->rowCount()>0){
            $result = false;
        }
        return $result;
    }
}



?>