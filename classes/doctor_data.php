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
}
    


$d_data = new doctorData();
$doctors = $d_data->get_Doctor_Data();

// class doctor_info extends doctorData{
//     public function get_Doctor_Data($doctorid){
//         $query = 'SELECT * FROM doctors WHERE d_id=?';
//         $stmt = $this->connect()->prepare($query);
//         if(!$stmt->execute([$doctorid])){
//             header('location:../index.php?stmtfailed');
//             exit();
//         }
//         $doctorData = $stmt->fetchAll();
//         return $doctorData;
//     }
// }
// $d_info = new doctor_info();




?>