<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Profile</title>
    <link rel="stylesheet" href="css/book.css">
</head>

<body>
    <?php
    require_once ('includes/dbh.inc.php');
    include ('classes/doctor_data.php');
    ?>

    <div class="book_container">
        <?php

        if (isset ($_GET['doctor_id'])) {
            $doctorid = $_GET['doctor_id'];
            //   $decoded_doctorid = base64_decode($doctorid);
            $doctor_info = $d_data->get_Doctor_info($doctorid);
            //   echo var_dump($doctor_info);
        
            if ($doctor_info) {
                echo '
    <div class="content">
        <div class="book_content">
            <div class="doctor_img"> ';
                foreach ($doctor_info as $key => $doctor) {
                    // $encoded_doctor_id = urlencode($doctor['d_id']);
                    $doctorid = $doctor['d_id'];
                    echo '
            <img src="doctorimages/' . $doctor['d_image'] . '" alt="">
            </div>
            <div class="info">
                <p>Name:' . ' ' . $doctor['d_firstname'] . ' ' . $doctor['d_lastname'] . '</p>
                <p>Contactno:' . ' ' . $doctor['d_phone'] . '</p>
                <p>Clinic/Hospital name:' . ' ' . $doctor['d_cilinics'] . '</p>
                <p>Clinic/Hospital Address:' . ' ' . $doctor['d_clocation'] . '</p>
                <p>Specialties:' . ' ' . $doctor['d_category'] . '</p>
                <p>Gender:' . ' ' . $doctor['d_gender'] . '</p>
                <a href="appointment.php?doctor_id=' . $doctorid . '">Set appointment</a>
                </div>
                </div>  
                </div>';
                }
            }
        }
        ?>
        
        <div class="review">
    <form action="includes/review.inc.php" method="POST" class="review_form" id="reviewForm">
        <input type="hidden" name="doctor_id" value="<?php echo isset($_GET['doctor_id']) ? $_GET['doctor_id'] : ''; ?>">
        <label for="review">Post a review</label>
        <textarea name="review_text" id="search" cols="80" rows="3"></textarea>
        <button type="submit" class="btn">POST</button>
    </form>
</div>

        <div id="review_section">
            <h2>Reviews</h2>
            <div class="review_list">
           <p class="name">Dipesh Kumar SHrestha <span id="Date">On Mar 18 9:35AM</span></p>
            <p id="review">Hello my name is Dipesh Kumar Shrestha </p>
             
            </div>
        </div>

        
        
        <script src="js/book.js"></script>
</body>

</html>