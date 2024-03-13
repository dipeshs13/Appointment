<?php


class doctorData extends dbh_connection{
    public function get_Doctor_Data(){
        $query = 'SELECT * FROM doctors';
        $stmt = $this->connect()->prepare($query);
        if(!$stmt->execute([])){
            header('location:../index.php?stmtfailed');
            exit();
        }
        $doctorData = $stmt->fetchAll();
        return $doctorData;
    }
}

$D_data = new doctorData();
$doctors = $D_data->get_Doctor_Data();




?>