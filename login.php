    <link rel="stylesheet" href="css/login.css">
    <div class="contain">
        <div class="login">
            <h1>Login Form</h1>
            <form action="includes/login.inc.php" method="POST">
                <div class="form_container">
                    <div class="form_control">
                        <label for="username">Username or Email</label>
                        <input type="text" name="username" id="username" placeholder="Enter username or email">
                    </div>
                    <div class="form_control">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter password">
                    </div>
                </div>
                <div class="button_container">
                    <button type="submit" name="submit">Login</button>
                </div>
            </form>
        </div>
    </div>