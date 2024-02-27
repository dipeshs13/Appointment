<?php
// error_reporting(0);
// print_r($_FILES["uploadfile"]);
require_once('dbh.inc.php');

if (isset($_POST['submit'])) {
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../image/" . $filename; //for storing file and saving that file in folder we create this folder(name and tempname will store)
// echo $folder;
    move_uploaded_file($tempname, $folder);

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cPassword = $_POST['confirmpassword'];
    $category = $_POST['category'];
    $hName = $_POST['hospital'];
    $hlocation = $_POST['location'];
    $dateofbirth = $_POST['dateofBirth'];
    $gender = $_POST['gender'];

    include "../classes/doctor_signup.classes.php";
    include "../classes/doctor_signup.controller.php";

    $signup = new doctorController($firstname,$lastname,$username,$email,$address,$phone,$password,$cPassword,$category,$hName,$hlocation,$dateofbirth,$folder,$gender);

    $signup->signupDoctor();
    header('location:../index.php?success');
    exit();

}



?>
