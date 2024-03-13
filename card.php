<?php
 require_once('includes/dbh.inc.php');
 include ('classes/doctor_data.php');
?>

<div class="container">
<?php
foreach ($doctors as $key => $doctor){?>

    <div class="card" id="card-<?php echo ($key+1);?>">
    <img src="doctorimage/<?php echo $doctor['d_image'];?>" alt="">
    <p class="speclaist"><?php echo $doctor['d_category'];?></p>
    <p class="name">Dr.<?php echo ($doctor['d_firstname']  . ' '.$doctor['d_lastname']); ?></p>
    <?php $encoded_doctorid = base64_encode($doctor['d_id'])?>
    <!-- <button class="book" >Book Now</button> -->
    <a href="Book.php?doctor_id=<?php echo $encoded_doctorid;?>">Book Now</a>
    </div>
    
  
  <?php } ?>
  
  <?php 
  for ($i=count($doctors)+1; $i <=8 ; $i++) {  ?>
      <div class="card" id="card-<?php echo $i ?>">
        <img src="images/doctor.png" alt="">
        <p class="name">Name:Name Here</p>
        <p class="speclaist">Specialist</p>
        <!-- <button class="book" >Book Now</button> -->
        <a href="Book.php">Book Now</a>
      </div>
  
  <?php } ?>
</div>
  <script src="js/script.js"></script>