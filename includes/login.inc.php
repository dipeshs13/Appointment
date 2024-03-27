<?php

require_once('dbh.inc.php');

if (isset($_POST['submit'])) {

    $userName = $_POST['username'];
    $password = $_POST['password'];




    include "../classes/login.classes.php";
    include "../classes/login.controller.php";

    $login = new login_controller($userName, $password);


    $login->loginUser();
    header('location:../index.php?signupSuccesfull');
    exit();
}




?>