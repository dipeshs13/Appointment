<?php
class Review_classes extends dbh_connection{
    public function get_review($doctorid,$userid,$review){
        $datetime = date("Y-m-d H:i:s");
        $query = "INSERT INTO review(d_id,u_id,r_comment,r_datetime) VALUES (?,?,?,?)";
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([$doctorid,$userid,$review,$datetime])){
            header("location:../Book.php?error=stmtfailed");
            exit();
        }

    }
}



?>