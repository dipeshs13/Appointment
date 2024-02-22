<?php

require_once('dbh.inc.php');

if(isset($_POST['submit'])){
    $fullName = $_POST['fullname'];
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];
    $dateofBirth = $_POST['dateOfBirth'];



     include "../classes/signup.classes.php";
     include "../classes/signup.controller.php";

     $sign_up = new Signup_controller($fullName,$userName,$email,$address,$phone,$password,$confirmPassword,$dateofBirth);
     

     $sign_up->signupUser();
     header('location:../index.php?signupSuccesfull');
     exit();
}




?>