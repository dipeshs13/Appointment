<?php

require_once('dbh.inc.php');

if(isset($_POST['submit'])){
    $fullName = $_POST['fullname'];
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $dateofBirth = $_POST['dateofBirth'];



     include "../classes/signup.classes.php";
     include "../classes/signup.controller.php";
     
}




?>