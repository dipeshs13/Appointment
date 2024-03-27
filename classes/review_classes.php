<?php
class Review_classes extends dbh_connection{
    public function post_review($doctorid,$userid,$review){
        $datetime = date("Y-m-d H:i:s");
        $query = "INSERT INTO review(d_id,u_id,r_comment,r_datetime) VALUES (?,?,?,?)";
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([$doctorid,$userid,$review,$datetime])){
            header("location:../Book.php?error=stmtfailed");
            exit();
        }

    }
    public function get_review($doctorid){
        $query = 'SELECT * FROM review WHERE d_id = ?';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([$doctorid])){
            header("location:../index.php?stmtfailed");
            exit();
        }
        $review = $stmt->fetchAll();
        return $review;
    }
    
    public function get_fullname($userid){
        $query = 'SELECT u_firstname,u_lastname FROM users WHERE u_id=?';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([$userid])){
            header("location:../index.php?stmtfailed");
            exit();
        }
        $user_fullname = $stmt->fetchAll();
        return $user_fullname;
    }
    
}


?>