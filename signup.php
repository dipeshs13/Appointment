<link rel="stylesheet" href="css/signup.css">
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css"> -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> -->
<div class="contain">
    <div class="signup signup_user">
        <span class="home"><a href="index.php">Home</a></span>
        <h3 class="header">Hello!</h3>
        <span class="small">Please signup to continue</span>
        <form action="includes/signup.inc.php" method="POST">
            <div class="form_container">
                <div class="form_control">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Enter First Name">
                </div>
                <div class="form_control">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Enter Last Name">
                </div>
                <div class="form_control">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="Username" placeholder="Enter Username">
                </div>
                <div class="form_control">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your Email">
                </div>
                <div class="form_control">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" placeholder="Enter your Address">
                </div>
                <div class="form_control">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" id="phone" placeholder="Enter your phone number">
                </div>
                <div class="form_control">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password">
                </div>
                <div class="form_control">
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
                </div>
                <div class="form_control">
                    <label for="date">DOB</label>
                    <input type="date" name="dateOfBirth" id="datepicker" placeholder="Enter your dob">
                </div>
                <div class="form_control">
                    <span class="link">Already have an account?<a href="login.php">Login In</a></span>
                </div>
            </div>
            <div class="button_container user_button">
                <button type="submit" name="submit">Register Now</button>
            </div>
        </form>
    </div>
</div>