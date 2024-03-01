<link rel="stylesheet" href="css/login.css">
    <div class="contain">
        <div class="login">
        <span class="home"><a href="index.php">Home</a></span>
        <h3 class="header">Hello!</h3>
        <span class="small">Please login to continue</span>
            <form action="includes/doctor_login.inc.php" method="POST">
                <div class="form_container">
                    <div class="form_control">
                        <label for="username">Username or Email</label>
                        <input type="text" name="username" id="username" placeholder="Enter username or email">
                    </div>
                    <div class="form_control">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter password">
                    </div>
                    <div class="form_control">
                    <span class="link">Don't have an account?<a href="doctorsignup.php">Register Here</a></span>
                </div>
                </div>
                <div class="button_container">
                    <button type="submit" name="submit">Login</button>
                </div>
            </form>
        </div>
    </div>