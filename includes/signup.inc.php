<?php

require_once('dbh.inc.php');

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];
    $dateofBirth = $_POST['dateOfBirth'];



     include "../classes/signup.classes.php";
     include "../classes/signup.controller.php";

     $sign_up = new Signup_controller($firstname, $lastname,$userName,$email,$address,$phone,$password,$confirmPassword,$dateofBirth);
     

     $sign_up->signupUser();
     header('location:../index.php?signupSuccesfull');
     exit();
}




?>