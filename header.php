<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
</head>

<body>
  <header id="header">
    <nav id="nav_bar">
      <div class="logo">
        <img src="images/healthcare.png" alt="This is an logo" id="image1">
      </div>

      <div class="h1">
        <h1>Doctor Appointment System</h1>
      </div>
      
      <div class="search">
        <div id="search">
          <input type="text" id="text" />
          <button id="search_bar">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </div>
        <div class="dropdown dropdown_cate">Category
          <ul class="dropdown-items">
            <li class="category"><a href="category.php">Specialist</a></li>
            <li class="category"><a href="category.php">Specialist</a></li>
          </ul>
        </div>
      </div>
      
      
      
      <div class="header-menu">
        <?php
            session_start();
           
          if(isset($_SESSION['user_login'])){
           echo  '<li><a href="#">'.$_SESSION['name'].'</a></li>
             <li><a href="logout.php">Logout</a></li>';
          }
          else{ 
            echo '
         <div class="dropdown">Login
          <ul class="dropdown-items">
            <li id="user"><a href="login.php">User</a></li>
            <li id="doctor"><a href="includes/doctor_login.php">Doctor</a></li>
          </ul>
        </div>
        
        <div class="dropdown">Register
          <ul class="dropdown-items">
            <li id="user"><a href="signup.php">User</a></li>
            <li id="doctor"><a href="includes/doctor_signup.php">Doctor</a></li>
          </ul>
        </div>';
          }
      ?>
      </div>
    </nav>
  </header>