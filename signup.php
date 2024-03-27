<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>

<div class="contain">
    <div class="signup signup_user">
        <span class="home"><a href="index.php">Home</a></span>
        <h3 class="header">Hello!</h3>
        <span class="small">Please signup to continue</span>
        <form action="includes/signup.inc.php" method="POST" id="form">
            <div class="form_contain">
                <div class="form_control">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" class="fullname" placeholder="Enter First Name">
                    <small></small>
                </div>
                <div class="form_control">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="fullname" placeholder="Enter Last Name">
                    <small></small>
                </div>
                <div class="form_control">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="Username" placeholder="Enter Username">
                    <small></small>
                </div>
                <div class="form_control">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your Email">
                    <small></small>
                </div>
                <div class="form_control">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" placeholder="Enter your Address">
                    <small></small>
                </div>
                <div class="form_control">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" id="phone" placeholder="Enter your phone number">
                    <small></small>
                </div>
                <div class="form_control">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password">
                    <small></small>
                </div>
                <div class="form_control">
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
                    <small></small>
                </div>
                <div class="form_control">
                    <label for="date">DOB</label>
                    <input type="date" name="dateOfBirth" id="datepicker" placeholder="Enter your dob">
                    <small></small>
                </div>
                <div class="form_control">
                    <span class="link">Already have an account?<a href="login.php">Login In</a></span>
                </div>
            </div>
            <div class="button_container user_button">
                <button type="submit" name="submit" id="Register">Register Now</button>
            </div>
           
        </form>
    </div>
</div>
<!-- <script src="script.js"></script> -->
<script src="js/script.js"></script>
</body>
</html>