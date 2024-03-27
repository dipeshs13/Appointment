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
}



?>