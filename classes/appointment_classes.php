<?php
class Appointment extends dbh_connection{
    public function set_appointment($doctorid, $userid, $date, $time){
        $query = 'INSERT INTO appointment (d_id,u_id,a_date,a_time) VALUES (?,?,?,?)';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([$doctorid,$userid,$date,$time])){
            header("location:../appointment.php?stmtfailed");
            exit();
        }

    }
}







?>