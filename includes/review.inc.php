<?php

session_start();
require_once 'dbh.inc.php';

if(isset($_POST['submit'])){

    // echo var_dump($_POST['submit']);
    $review = $_POST['review_text'];
    $doctor_id = $_POST['doctor_id'];

    if($_SESSION['user_id']){
        $user_id = $_SESSION['user_id'];
    } else{
        header('location:../login.php?error=PleaseLoginFirst');
        exit();
    }

    include '../classes/review_classes.php';
    include '../classes/review_controller.php';

    $review_post = new Review_controller($doctor_id,$user_id,$review);

    $review_post->review();
    if($review_post){
        header('location:../Book.php?doctor_id='.$doctor_id.'success');
        exit();
    } 


}


?>