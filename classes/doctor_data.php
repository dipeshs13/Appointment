<?php


class doctorData extends dbh_connection{
    public function get_Doctor_Data(){
        $query = 'SELECT * FROM doctors LIMIT 8';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([])){
            header('location:../index.php?stmtfailed');
            exit();
        }
        $doctorData = $stmt->fetchAll();
        return $doctorData;
    }
    public function get_Doctor_info($doctorid){
        $query = 'SELECT * FROM doctors WHERE d_id=?';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([$doctorid])){
            header('location:../index.php?stmtfailed');
            exit();
        }
        $doctorData = $stmt->fetchAll();
        return $doctorData;
    }
    
    public function get_categories(){
        $query = 'SELECT DISTINCT d_category FROM doctors';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([])){
            header('location:../index.php?stmtfailed');
            exit();
        }
        $doctorData = $stmt->fetchAll();
        return $doctorData;
    }
    public function get_categories_info($categories){
        $query = 'SELECT * FROM doctors WHERE d_category=?';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([$categories])){
            header('location:../index.php?stmtfailed');
            exit();
        }
        $doctorData = $stmt->fetchAll();
        return $doctorData;
    }
}
    


$d_data = new doctorData();






?>