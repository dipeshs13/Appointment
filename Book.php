<link rel="stylesheet" href="css/book.css">
<div class="book_container">
    <div class="content">
        <div class="book_content">
            <div class="doctor_img">
            <img src="images/doctor.png" alt="">
            </div>
           <div class="info">
            <p>Name: Dipesh Kumar Shrestha</p>
            <p>Email: dipesh@test.com</p>
            <p>Contact: 983439377</p>
            <p>Clinic name: Nayabazar Clinic</p>
            <p>Clinic Address: Nayabazar-16, Kathmandu</p>
            <p>Specialties: Dermatologists </p>
            <button type="appointment" class="appointment"><a href="appointment.php">set appointment</a></button>
           </div>
        </div>
        <div>
            <div class="review">
            <form action="" class="review_form">
                <label for="review">Post a review</label>
                <textarea name="review_text" id="" cols="80" rows="3"></textarea>
                <button type="submit"> POST</button>
            </form>
        </div>
        <div id="review_section">
            <h2>Reviews</h2>
            <ul id="review_list">
             
            </ul>
        </div>
</div>
<script src="js/book.js"></script>