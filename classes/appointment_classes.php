<?php
class Appointment extends dbh_connection{
    public function request_appointment($doctorid, $userid, $date, $time){
        $query = 'INSERT INTO appointment (d_id,u_id,a_date,a_time,status) VALUES (?,?,?,?,0)';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([$doctorid,$userid,$date,$time])){
            header("location:../appointment.php?stmtfailed");
            exit();
        }
    }
    public function get_user_appointment(){
        $query = 'SELECT * FROM appointment';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([])){
            header("location:../appointment.php?stmtfailed");
            exit();
        }
        return $stmt->fetchAll();
    }
}







?>