<?php
// error_reporting(0);
// print_r($_FILES["uploadfile"]);

require_once('dbh.inc.php');

if (isset($_POST['submit'])) {

    
   
  
    $filename = $_FILES['uploadfile']['name'];
    $tempname = $_FILES['uploadfile']['tmp_name'];
    $folder = "upload/certificate/" . $filename;
    move_uploaded_file($tempname, $folder);

    // Doctor image
    $imagename = $_FILES['profile']['name'];
    $tempimage = $_FILES['profile']['tmp_name'];
    $imagefolder = "../"."upload/profile/" . $imagename;
    move_uploaded_file($tempimage,$imagefolder);

  
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cPassword = $_POST['confirmpassword'];
    $category = $_POST['category'];
    $hName = $_POST['hospital'];
    $hlocation = $_POST['location'];
   
    
    $experienced = $_POST['experienced'];
    $qualification = $_POST['qualification'];
   
    include "../classes/doctor_signup.classes.php";
    include "../classes/doctor_signup.controller.php";

    $signup = new doctorController($fullname, $username, $email, $phone, $password, $cPassword, $category, $hName, $hlocation,  $folder,  $imagefolder, $experienced, $qualification);

    $signup->signupDoctor();
    header('location:../index.php?success');
    exit();
}
?>
