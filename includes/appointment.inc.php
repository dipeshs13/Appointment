<?php
session_start();
require_once 'dbh.inc.php';

// if(isset($_GET['doctor_id'])){
//     var_dump($_GET);
// }

// if (isset($_REQUEST['doctor_id'])) {
//     $doctor_id = $_REQUEST['doctor_id'];
//     echo $doctor_id;
    // Proceed with further processing
// } else {
    // Handle case where doctor ID is not found in URL
// }

if (isset ($_POST['submit'])) {
    $date = $_POST['date'];
    $time = $_POST['time'];
    $doctorid = $_POST['doctor_id'];

    

    // if (isset ($_GET['doctor_id'])) {
    //     echo ' content of GEt'; 
    //     // var_dump($_GET);
    //     echo $_GET;
    //     // $doctorid = $_GET['doctor_id'];

    // } else{
    //     header("location:../appointment.php?doctoridmissing");
    //     exit();
    // }
        if (isset ($_SESSION['user_id'])) {
            // echo var_dump($_SESSION['user_id']);
            $userid = $_SESSION['user_id'];
        }
        else{
            header("location:../appointment.php?pleaseloginfirst");
        }
    include '../classes/appointment_classes.php';
    include '../classes/appointment_controller.php';

    $appointment_list = new Appointment_controller($date,$time,$doctorid,$userid);

    $appointment_list->handle_appointment();
    if($appointment_list){
        header("location: ../index.php?success");
        exit();
    } else{
        header("location:../appointment.php?failed");
        exit();
    }
}



?>