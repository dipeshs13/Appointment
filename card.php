<?php
 require_once('includes/dbh.inc.php');
 include ('classes/doctor_data.php');
?>

<div class="container">
<?php


 if($doctors){
foreach ($doctors as $key => $doctor){
  $encoded_doctorid = base64_encode($doctor['d_id']);
     echo '
    <div class="card" id="card-'.($key+1).'">
    <img src="doctorimage/'.$doctor['d_image'].'" alt="">
    <p class="specilaist">'.$doctor['d_category'].'</p>
    <p class="name">Dr.'.($doctor['d_firstname']  . ' '.$doctor['d_lastname']).'</p>
    <a href="Book.php?doctor_id='. $encoded_doctorid.'">Book Now</a>
    </div>
    ';
  }
  // <!-- <button class="book" >Book Now</button> -->
}
  ?>
  
  <?php 
  for ($i=count($doctors)+1; $i <=8 ; $i++) {
    echo '  
      <div class="card" id="card-'. $i.'">
        <img src="images/doctor.png" alt="">
        <p class="name">Name:Name Here</p>
        <p class="specilaist">Specialist</p>
        <!-- <button class="book" >Book Now</button> -->
        <a href="Book.php">Book Now</a>
      </div>
  ';
   } 
   ?>
</div>
  <script src="js/script.js"></script>