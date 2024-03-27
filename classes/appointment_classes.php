<?php
class Appointment extends dbh_connection{
    public function request_appointment($doctorid, $userid, $date, $time){
        $query = 'INSERT INTO appointment (d_id,u_id,a_date,a_time,status) VALUES (?,?,?,?,"pending")';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([$doctorid,$userid,$date,$time])){
            header("location:../appointment.php?stmtfailed");
            exit();
        }
    }
    public function get_user_appointment(){
        $query = 'SELECT * FROM appointment where status = "pending"';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([])){
            header("location:../appointment.php?stmtfailed");
            exit();
        }
        return $stmt->fetchAll();
    }
    public function confirm_appointment($appointmentid){
        $query = 'UPDATE appointment SET status = "confirm" where a_id=?';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([$appointmentid])){
            header("location:../appointment.php?stmtfailed");
            exit();
        }
    }

    public function complete_appointment($appointmentid){
        $query = 'UPDATE appointment SET status = "completed" where a_id=?';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([$appointmentid])){
            header("location:../appointment.php?stmtfailed");
            exit();
        }

    }
    public function get_confirmed_appointment(){
        $query = 'SELECT * FROM appointment WHERE status = "confirm"';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([])){
            header("location:../appointment.php?stmtfailed");
            exit();
        }
        return $stmt->fetchAll();
    }
    public function get_completed_appointment(){
        $query = 'SELECT * FROM appointment WHERE status = "completed"';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([])){
            header("location:../appointment.php?stmtfailed");
            exit();
        }
        return $stmt->fetchAll();
    }

    public function get_pending_appointment(){
        $query = "SELECT count(*)from appointment where status = 'pending'";
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([])){
            header("location: ../appointment.php?stmtfailed");
            exit();
        }
        return $stmt->fetchColumn();
    }
    public function get_confirm_appointment(){
        $query = "SELECT count(*)from appointment where status = 'confirm'";
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([])){
            header("location: ../appointment.php?stmtfailed");
            exit();
        }
        return $stmt->fetchColumn();
    }
    public function get_complete_appointment(){
        $query = "SELECT count(*)from appointment where status = 'completed'";
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([])){
            header("location: ../appointment.php?stmtfailed");
            exit();
        }
        return $stmt->fetchColumn();
    }
}







?>