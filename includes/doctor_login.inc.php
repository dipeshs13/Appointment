<?php
require_once 'dbh.inc.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    include "../classes/doctor_login.classes.php";
    include "../classes/doctor_login.controller.php";

    $doctor = new doctorlogin_controller($username,$password);

    $doctor->loginDoctor();
    header('location: ../doctor.php');
    exit();
}



?>