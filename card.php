

<div class="container">
<?php

$doctors = $d_data->get_Doctor_Data();
 if($doctors){
foreach ($doctors as $key => $doctor){
  // $encoded_doctorid = base64_encode($doctor['d_id']);
  $doctor_id = $doctor['d_id'];
  $doctorimage = $doctor['d_image'];
  $trimmedDoctorImage = substr($doctorimage, 3);
  
  // echo $doctorimage;
     echo '
    <div class="card" id="card-'.($key+1).'">
    <img src="'.$trimmedDoctorImage.'" alt="" id="card-image">
    <p class="specilaist">'.$doctor['d_category'].'</p>
    <p class="name">Dr.'.$doctor['d_fullname'].'</p>
    <a href="../Book.php?doctor_id='. $doctor_id.'">Book Now</a>
    </div>
    ';
  }
  
}
  ?>
  
  <?php 
  for ($i=count($doctors)+1; $i <=8 ; $i++) {
    echo '  
      <div class="card" id="card-'. $i.'">
        <img src="images/doctor.png" alt="">
        <p class="specilaist">Specialist</p>
        <p class="name">Name:Name Here</p>
        <!-- <button class="book" >Book Now</button> -->
        <a href="Book.php">Book Now</a>
      </div>
  ';
   } 
   ?>
</div>
  <script src="js/script.js"></script>