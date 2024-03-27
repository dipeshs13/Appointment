<?php

require 'dbh.inc.php';
if(isset($_POST['submit'])){

$day_from = $_POST['day_from'];
$day_to = $_POST['day_to'];


$time_from = $_POST['time_from'];
$time_to = $_POST['time_to'];



$doctorid = $_POST['doctor_id'];


include '../classes/doctor_schedule.classes.php';
include '../classes/doctor_schedule.controller.php';

$schedule = new doctor_schedule_controller($doctorid,$day_from,$day_to,$time_from,$time_to);

 $schedule->Appointmentschedule();

if($schedule){
        header("location:../doctor.php?success");
        exit();
    }
    else{
            header("location:../doctor.php?failed");
            exit();
        }
        
    }

?>