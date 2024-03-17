<link rel="stylesheet" href="css/signup.css">
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css"> -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> -->
<div class="contain">
    <div class="signup">
        <span class="home"><a href="index.php">Home</a></span>
        <h3 class="header">Hello!</h3>
        <span class="small">Please signup to continue</span>
        <form action="includes/doctor_signup.inc.php" method="POST" enctype="multipart/form-data">
            <div class="form_container">
                <div class="form_control">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Enter First Name..">
                </div>
                <div class="form_control">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Enter Last Name..">
                </div>
                <div class="form_control">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="Username" placeholder="Enter Username..">
                </div>
                <div class="form_control">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your Email..">
                </div>
                <div class="form_control">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" placeholder="Enter your Address..">
                </div>
                <div class="form_control">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" id="phone" placeholder="Enter your phone number..">
                </div>
                <div class="form_control">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password..">
                </div>
                <div class="form_control">
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password..">
                </div>
                <div class="form_control">
                    <label for="category">Category</label>
                    <select name="category" id="category">
                    <option value="" selected disabled hidden>Select Category</option>
                        <option value="Dermatologists" >Dermatologists</option>
                        <option value="Endocrinologists">Endocrinologists</option>
                        <option value="Gastroenterologists">Gastroenterologists</option>
                        <option value="Hematologists">Hematologists</option>
                        <option value="Internists">Internists</option>
                    </select>
                </div>
                <div class="form_control">
                    <label for="qualification">Qualification</label>
                    <select name="qualification" id="qualification">
                    <option value="" selected disabled hidden>Select Qualification</option>
                        <option value="Bachelor of Medicine, Bachelor of Surgery - MBBS" >Bachelor of Medicine, Bachelor of Surgery - MBBS</option>
                        <option value="Master of Surgery - MS">Master of Surgery - MS</option>
                        <option value="Doctor of Medicine - MD">Doctor of Medicine - MD</option>
                        <option value="Bachelor of Physiotherapy - BPT">Bachelor of Physiotherapy - BPT</option>
                        <option value="Bachelor of Siddha Medicine and Surgery - BSMS">Bachelor of Siddha Medicine and Surgery - BSMS</option>
                    </select>
                </div>
                <div class="form_control">
                    <label for="hospital">Clinics/Hospital name</label>
                    <input type="text" name="hospital" id="hospital" placeholder="Enter your clinics/hospital name..">
                </div>
                <div class="form_control">
                    <label for="location">Clinics/Hospital Location</label>
                    <input type="text" name="location" id="location" placeholder="Enter clinics/hospital location..">
                </div>

                <div class="form_control">
                    <label for="date">DateOfBirth:</label>
                    <input type="date" name="dateofBirth" id="datepicker" placeholder="Enter your dob..">
                </div>
                <div class="form_control">
                    <label for="file">Certificate</label>
                    <input type="file" name="uploadfile" id="file">
                </div>
                <div class="form_control">
                    <label for="experienced">Experienced Year</label>
                    <input type="text" name="experienced" id="experienced" placeholder="Enter your Experienced year..">
                </div>
                <div class="form_control">
                    <label for="profile">Upload Your Image</label>
                    <input type="file" name="profile" id="profile">
                </div>
                <div class="control gender">
                    <label for="gender">Gender:</label>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                </div>

                <div class="form_control">
                    <span class="link">Already have an account?<a href="login.php">Login In</a></span>
                </div>
            </div>
            <div class="button_container">
                <button type="submit" name="submit">Register Now</button>
            </div>
        </form>
    </div>
</div>