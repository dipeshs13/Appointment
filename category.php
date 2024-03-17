<?php
 include 'header.php';
?>

<div class="container">
  <?php 
  if(isset($_GET['doctor_category'])){
    $doctorcategory= $_GET['doctor_category'];
    $doctor_info = $d_data->get_categories_info($doctorcategory);
    
    if($doctor_info){
      foreach ($doctor_info as $key => $doctors) {
        $doctor_id = $doctors['d_id'];
       echo 
       ' <div class="card" id="card-'.($key+1).'">
      <img src="images/doctor.png" alt="">
      <p class="speclaist">'.$doctors['d_category'].'</p>
      <p class="name">Name:'.$doctors['d_firstname'].' '.$doctors['d_lastname'].'</p>
      <p>Available</p>
      <a href="Book.php?doctor_id='.$doctor_id.'">Book Now</a>
    </div>';
      }
    }
    
  }
  ?>
    <?php
      for ($i=count($doctor_info)+1; $i<=8  ; $i++) { 
        echo '
        <div class="card" id="card-2">
        <img src="images/doctor.png" alt="">
        <p class="speclaist">Specialist</p>
        <p class="name">Name:Name Here</p>
        <p>Available</p>
        <a href="Book.php">Book Now</a>
    
        </div>';
      }

   ?>


    <!-- <div class="card" id="card-3">
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

    </div> -->
    
</div>
<script src="category.js"></script>