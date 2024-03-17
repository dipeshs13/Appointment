<?php
 include 'header.php';
?>

<div class="container">
  <?php 
  if(isset($_GET['doctor_id'])){
    $doctorid = $_GET['doctor_id'];
    $doctor_info = $d_data->get_Doctor_info($doctorid);
    
    if($doctor_info){
      foreach ($doctor_info as $key => $doctors) {
       echo 
       ' <div class="card" id="card-'.($key+1).'">
      <img src="images/doctor.png" alt="">
      <p class="speclaist">'.$doctors['d_category'].'</p>
      <p class="name">Name:'.$doctors['d_firstname'].'</p>
      <p>Available</p>
      <button class="book">Book Now</button>
    </div>';
      }
    }
    
  }
  ?>
    

    <div class="card" id="card-2">
    <img src="images/doctor.png" alt="">
    <p class="speclaist">Specialist</p>
    <p class="name">Name:Name Here</p>
    <p>Available</p>
    <button class="book">Book Now</button>

    </div>

    <div class="card" id="card-3">
    <img src="images/doctor.png" alt="">
    <p class="speclaist">Specialist</p>
    <p class="name">Name:Name Here</p>
    <p>Available</p>
     <button class="book">Book Now</button>

    </div> 

    <div class="card" id="card-4">
    <img src="images/doctor.png" alt="">
    <p class="speclaist">Specialist</p>
    <p class="name">Name:Name Here</p>
    <p>Available</p>
    <button class="book">Book Now</button>

    </div>

    <div class="card" id="card-5">
    <img src="images/doctor.png" alt="">
    <p class="speclaist">Specialist</p>
    <p class="name">Name:Name Here</p>
    <p>Available</p>
    <button class="book">Book Now</button>

    </div>

    <div class="card" id="card-6">
    <img src="images/doctor.png" alt="">
    <p class="speclaist">Specialist</p>
    <p class="name">Name:Name Here</p>
    <p>Available</p>
    <button class="book">Book Now</button>

    </div>

    <div class="card" id="card-7">
    <img src="images/doctor.png" alt="">
    <p class="speclaist">Specialist</p>
    <p class="name">Name:Name Here</p>
    <p>Available</p>
     <button class="book">Book Now</button>

    </div>

    <div class="card" id="card-8">
    <img src="images/doctor.png" alt="">
    <p class="speclaist">Specialist</p>
    <p class="name">Name:Name Here</p>
    <p>Available</p>
    <button class="book">Book Now</button>

    </div>
    
</div>
<script src="category.js"></script>