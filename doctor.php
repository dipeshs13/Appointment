<?php
session_start();
if (!isset($_SESSION['doctor_id'])) {
  header("Location: ../doctorlogin.php");
  exit(); 
}
require_once 'includes/dbh.inc.php';
include 'classes/appointment_classes.php';
$appointmentinfo = new Appointment();
$confirm_appointments = $appointmentinfo->get_confirmed_appointment();
$complete_appointments = $appointmentinfo->get_completed_appointment();

include 'classes/user_data.php';
$userData = new User_data();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor</title>
  <link rel="stylesheet" href="css/doctor.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="sidebar">
    <div class="logo"></div>
    <ul class="menu">
      <li class="active">
        <a href="#" id="dashboard">
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#" id="profile">
          <span>Profile</span>
        </a>
      </li>
      <li>
        <a href="#" id="pending">
          <span>Pending</span>
        </a>
      </li>
      <li>
        <a href="#" id="confirm">
          <span>Confirm</span>
        </a>
      </li>
      <li>
        <a href="#" id="complete">
          <span>Completed</span>
        </a>
      </li>


      <!-- <li>
        <a href="#">
          <span>Settings</span>
        </a>
      </li> -->

      <?php
      if (isset($_SESSION['doctor_id'])) {
        echo '
        <li class="logout">
        <a href="#">
        <span><a href="logout.php">Logout</a></span>
        </a>
        </li>
        </ul>
        ';
      }
      ?>
  </div>


  <div class="main_content " id="maincontent">
    <div class="header">
      <?php

      ?>
      <div class="header_title">
        <span>Doctor</span>
        <h2>Dashboard</h2>
      </div>
      <div class="user_info">
        <div class="search_box">
          <i class="fa-solid fa-search"></i>
          <input type="text" placeholder="Search" />
        </div>
        <!-- <img src=' . $_SESSION['doctorimg'] . ' alt=""> -->
      </div>
    </div>

    <div class="card_container" id="cardcontainer">
      <h3 class="main_title">Today's date</h3>
      <div class="card">


        <div class="appointment_card">
          <div class="card_header">
            <div class="appointment">
              <span class="title">
                <?php
                $totalPending = $appointmentinfo->get_pending_appointment();
                // foreach ($$toalPendingAppointment as $key => $total) {
                  # code...
                  echo 'Pending Appointment
                  </span>
                  <span class="appointment_value">
                  '.$totalPending.' pending
                  </span>
                  
                  ';
                // }
                ?>
              
            </div>
          </div>
        </div>

        <div class="appointment_card">
          <div class="card_header">
            <div class="appointment">
              <span class="title">
             <?php
             $confirmAppointment = $appointmentinfo->get_confirm_appointment();
              echo 'Confirm Appointment
              </span>
              <span class="appointment_value">
                '.$confirmAppointment.' appointment
              </span>';
              ?>
            </div>
          </div>
        </div>

        <div class="appointment_card">
          <div class="card_header">
            <div class="appointment">
              <span class="title">
                <?php
                $completedApp = $appointmentinfo->get_complete_appointment();
                echo '
                Completed Appointment
              </span>
              <span class="appointment_value">
                '.$completedApp.' appointment
              </span>';
              ?>
            </div>
          </div>
        </div>


  
      </div>
    </div>


    <div class="tabular">
      <h3 class="main_title">Appointment data</h3>
      <div class="table_container">
        <table>
          <thead>
            <tr>
              
              <th>Name</th>
              <th>Phone</th>
              <th>Appointment Date</th>
              <th>Appointment Time</th>
              <th>Status</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
             
              <?php
               if($complete_appointments){
                foreach ($complete_appointments as $key => $complete) {
                  echo '<tr>';
                  $userid = $complete['u_id'];
                  $userinfo = $userData->getUserInfo($userid);
                  if($userinfo){
                    foreach ($userinfo as $key => $user) {
                      echo '<td>'.$user['u_firstname'].'</td>';
                      echo '<td>'.$user['u_phone'].'</td>';
                      
                    }
                  }
                  echo '<td>'.$complete['a_date'].'</td>';
                  echo '<td>' . $complete['a_time'] . '</td>';
                  echo '<td>' . $complete['status'] . '</td>';
                  echo '</tr>';
                }
               }
                ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="blank">
    <div>

      <?php
      //  require_once 'includes/dbh.inc.php';
      include 'classes/doctor_data.php';

      $doctorid = $_SESSION['doctor_id'];
      $doctor_info = $d_data->get_Doctor_info($doctorid);
      if ($doctor_info) {
        foreach ($doctor_info as $key => $doctor) {

          echo '
          <p>Name:' . ' ' . $doctor['d_fullname'] . '</p>
          <p>Username:' . ' ' . $doctor['d_username'] . '</p>
          <p>Email:' . ' ' . $doctor['d_email'] . '</p>
          <p>Phone:' . ' ' . $doctor['d_phone'] . '</p>
          <p>Category:' . ' ' . $doctor['d_category'] . '</p>
          <p>Experienced:' . ' ' . $doctor['d_experienced'] . '</p>
          <p>Qualification:' . ' ' . $doctor['d_qualification'] . '</p>
          ';
        }
      }

      ?>

    </div>
    <form action="includes/doctor_schedule.inc.php" id="form_container" method="POST">
      <!-- <input type="time" name="" id=""> -->

      <input type="hidden" name="doctor_id" value="<?php echo $doctorid; ?>">
      <div class="content">
        <label for="Day">Day From </label>
        <select name="day_from" id="day">
          <option value="" selected disabled hidden>Select Day </option>
          <option value="Sunday"> Sunday</option>
          <option value="Monday"> Monday</option>
          <option value="Tuesday"> Tuesday</option>
          <option value="Wednesday"> Wednesday</option>
          <option value="Thursday"> Thursday</option>
          <option value="Friday"> Friday</option>
        </select>
      </div>
      <div class="content">
        <label for="Day">Day To</label>
        <select name="day_to" id="day">
          <option value="" selected disabled hidden>Select Day</option>
          <option value="Sunday"> Sunday</option>
          <option value="Monday"> Monday</option>
          <option value="Tuesday"> Tuesday</option>
          <option value="Wednesday"> Wednesday</option>
          <option value="Thursday"> Thursday</option>
          <option value="Friday"> Friday</option>
        </select>
      </div>
      <div class="content">
        <label for="time_from">Time form</label>
        <input type="time" name="time_from" id="time_from">
      </div>
      <div class="content">
        <label for="time_to">Time to</label>
        <input type="time" name="time_to" id="time_from">
      </div>


      <button type="submit" name="submit">Submit</button>
    </form>
  </div>

  <div class="pen_appointment">
    <div class="pending">
      <?php


      $pending_appointments = $appointmentinfo->get_user_appointment();

      if ($pending_appointments) {
        foreach ($pending_appointments as $pending) {
          echo '<p>User ID: ' . $pending['u_id'] . '</p>';
          echo '<p>Appointment Date: ' . $pending['a_date'] . '</p>';
          echo '<p>Appointment Time: ' . $pending['a_time'] . '</p>';
          echo '<p>Appointment status: ' . $pending['status'] . '</p>';
          echo '<a href="doctor.php?a_id=' . $pending['a_id'] . '&status=confirm">Confirm</a>';
        }
      }


      ?>

    </div>
  </div>

  <?php
 
 if(isset($_GET['a_id'])){
  $appointmentid = $_GET['a_id'];
  $appointmentinfo->confirm_appointment($appointmentid);
}

    ?>
  <div class="con_appointment">
    <div class="confirm">
      <h3>Confirmed Appointments</h3>
      <div class="appointment-list">
        <?php
    
        if ($confirm_appointments) {
          foreach ($confirm_appointments as $key => $confirm) {
            $userid = $confirm['u_id'];
            $userinfo = $userData->getUserInfo($userid);
            if($userinfo){
            foreach ($userinfo as $key => $user) {
              echo '<p><strong>Name: </strong>' . $user['u_firstname'] . ' ' . $user['u_lastname'] . '</p>';
              echo '<p><strong>Phone: </strong>' . $user['u_phone'] . '</p>';
            }
         }
             echo '<div class="appointment_info">';
            echo '<p><strong>Appointment Date:</strong> ' . $confirm['a_date'] . '</p>';
            echo '<p><strong>Appointment Time:</strong> ' . $confirm['a_time'] . '</p>';
            echo '<p><strong>Appointment Status:</strong> <span class="green-text">' . $confirm['status'] . '</span></p>';
            echo '<a href="doctor.php?a_id=' . $confirm['a_id'] . '&status=completed">Completed</a>';
            echo '</div>';
          }
        } else {
          echo '<p>No confirmed appointments available.</p>';
        }
        ?>
      </div>
    </div>
  </div>


  <div class="comp_appointment">
  <div class="confirm">
      <h3>Completed Appointments</h3>
      <div class="appointment-list">
    <?php
    $appointmentinfo->complete_appointment($appointmentid);
    // $complete_appointments = $appointmentinfo->get_completed_appointment();
        if ($complete_appointments) {
          foreach ($complete_appointments as $key => $complete) {
            if($userinfo){
              echo '<p><strong>Name: </strong>' . $user['u_firstname'] . ' ' . $user['u_lastname'] . '</p>';
              echo '<p><strong>Phone: </strong>' . $user['u_phone'] . '</p>';
            } 
            echo '<div class="appointment_info">';
            echo '<p><strong>Appointment Date:</strong> ' . $complete['a_date'] . '</p>';
            echo '<p><strong>Appointment Time:</strong> ' . $complete['a_time'] . '</p>';
            echo '<p><strong>Appointment Status:</strong> <span class="green-text">' . $complete['status'] . '</span></p>';
            echo '</div>';
          }
        } else {
          echo '<p>No confirmed appointments available.</p>';
        }
        ?>
    
      </div>
      </div>
  </div>


  <script>
    let dashboard = document.getElementById('dashboard');
    let maincontent = document.getElementsByClassName('main_content')[0];
    let profile = document.getElementById('profile');
    let blank = document.getElementsByClassName('blank')[0];
    let complete = document.getElementById('complete');
    let compAppointment = document.getElementsByClassName('comp_appointment')[0];
    let confirm = document.getElementById('confirm');
    let conAppointment = document.getElementsByClassName('con_appointment')[0];
    let pending = document.getElementById('pending');
    let penAppointment = document.getElementsByClassName('pen_appointment')[0];
    // let sidebar = document.getElementsByClassName('sidebar')[0];


    let main = function () {
      blank.style.display = 'none';
      compAppointment.style.display = 'none';
      conAppointment.style.display = 'none';
      penAppointment.style.display = 'none';
      maincontent.classList.remove('hidden');

    }
    dashboard.addEventListener('click', main);

    let info = function () {
      maincontent.classList.add('hidden');
      compAppointment.style.display = 'none';
      conAppointment.style.display = 'none';
      penAppointment.style.display = 'none';
      blank.style.display = 'block';

    }
    profile.addEventListener('click', info);

    let com_appointment = function () {
      maincontent.classList.add('hidden');
      blank.style.display = 'none';
      conAppointment.style.display = 'none';
      penAppointment.style.display = 'none';
      compAppointment.style.display = 'block';


    }
    complete.addEventListener('click', com_appointment);

    let con_appointment = function () {
      maincontent.classList.add('hidden');
      blank.style.display = 'none';
      compAppointment.style.display = 'none';
      penAppointment.style.display = 'none';
      conAppointment.style.display = 'block';

    }
    confirm.addEventListener('click', con_appointment);

    let pen_appointment = function () {
      maincontent.classList.add('hidden');
      blank.style.display = 'none';
      compAppointment.style.display = 'none';
      conAppointment.style.display = 'none';
      penAppointment.style.display = 'block';
    }
    pending.addEventListener('click', pen_appointment);


  </script>
</body>

</html>