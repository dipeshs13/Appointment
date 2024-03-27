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
    
          $doctorid = null;
        if (isset ($_GET['doctor_id'])) {
            $doctorid = $_GET['doctor_id'];
            
            $doctor_info = $d_data->get_Doctor_info($doctorid);
            
        
            if ($doctor_info) {
                echo '
    <div class="content">
        <div class="book_content">
            <div class="doctor_img"> ';
                foreach ($doctor_info as $key => $doctor) {
                    $doctorid = $doctor['d_id'];
                    echo '
            <img src=" '. $doctor['d_image'] . '" alt="">
            </div>
            <div class="info">
                <p>Name:' . ' ' . $doctor['d_fullname'] . ' </p>
                <p>Contactno:' . ' ' . $doctor['d_phone'] . '</p>
                <p>Clinics/Hospital name:' . ' ' . $doctor['d_cilinics'] . '</p>
                <p>Clinics/Hospital Address:' . ' ' . $doctor['d_clocation'] . '</p>
                <p>Specialties:' . ' ' . $doctor['d_category'] . '</p>
                <a href="appointment.php?doctor_id=' . $doctorid . '">Set appointment</a>
                </div>
                </div>  
                </div>';
                }
            }
        }
        ?>
        


    <?php
    session_start();
    include 'classes/review_classes.php';
    if(isset($_SESSION['user_id'])){
        echo '
        <div class="review">
            <form action="includes/review.inc.php" class="review_form" id="reviewForm"  method="POST">
                <input type="hidden" name="doctor_id" value="'.$doctorid.'">
                <label for="review">Post a review</label>
                <textarea name="review_text" id="search" cols="80" rows="3"></textarea>
                <button type="submit" name="submit" class="btn">POST</button>
            </form>
        </div>';
    }
    
    if($doctorid){
    echo '
        <div id="review_section" class="review_box">
            <h2>Reviews</h2>
            <div class="review_list">';
        
    
        
         $review = new Review_classes();
         $review_data = $review->get_review($doctorid);
         if($review_data){
         foreach ($review_data as $key => $reviews ) {
            $user_id = $reviews['u_id'];
            $user_info = $review->get_fullname($user_id);
             foreach ($user_info as $key => $user_fullname) {
                $user_firstname = $user_fullname['u_firstname'];
                $user_lastname = $user_fullname['u_lastname'];
             }
            }
            echo '
            
             <p class="name">'.$user_firstname.' '.$user_lastname.' <span id="Date">'.$reviews['r_datetime'].'</span></p>
             <p id="review">'.$reviews['r_comment'].' </p>
             
             ';
         }
        
    }
        ?>
            </div>
        </div>

        
        
        <script src="js/book.js"></script>
</body>

</html>