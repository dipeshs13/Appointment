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
        <a href="#" id="complete">
          <span>Completed</span>
        </a>
      </li>
      <li>
        <a href="#" id="confirm">
          <span>Confirm</span>
        </a>
      </li>
      <li>
        <a href="#" id="pending">
          <span>Pending</span>
        </a>
      </li>
      <!-- <li>
        <a href="#">
          <span>Settings</span>
        </a>
      </li> -->

<?php
      session_start();
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
      <div class="header_title">
        <span>Doctor</span>
        <h2>Dashboard</h2>
      </div>
      <div class="user_info">
        <div class="search_box">
          <i class="fa-solid fa-search"></i>
          <input type="text" placeholder="Search"/>
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
                  Completed Appointment
                </span>
                <span class="appointment_value">
                  10 appointment
                </span>
              </div>
            </div>
          </div>

          <div class="appointment_card">
            <div class="card_header">
              <div class="appointment">
                <span class="title">
                  Confirm Appointment
                </span>
                <span class="appointment_value">
                  10 appointment
                </span>
              </div>
            </div>
          </div>

          <div class="appointment_card">
            <div class="card_header">
              <div class="appointment">
                <span class="title">
                  Pending Appointment
                </span>
                <span class="appointment_value">
                  5 pending
                </span>
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
                <th>Date</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  2024-02-20
                </td>
                <td>Dipesh Kumar Shrestha</td>
                <td>9852829419</td>
                <td>2024-02-26</td>
                <td>5:00pm - 6:00pm</td>
                <td>Pending</td>
                <td><button>Edit</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="blank">
      <div>

      <?php
       require_once 'includes/dbh.inc.php';
       include 'classes/doctor_data.php';

       $doctorid = $_SESSION['doctor_id'];
       $doctor_info = $d_data->get_Doctor_info($doctorid);
       if($doctor_info){
        foreach ($doctor_info as $key => $doctor) {
          
          echo '
          <p>Name:'.' '.$doctor['d_fullname'].'</p>
          <p>Username:'.' '.$doctor['d_username'].'</p>
          <p>Email:'.' '.$doctor['d_email'].'</p>
          <p>Phone:'.' '.$doctor['d_phone'].'</p>
          <p>Category:'.' '.$doctor['d_category'].'</p>
          <p>Experienced:'.' '.$doctor['d_experienced'].'</p>
          <p>Qualification:'.' '.$doctor['d_qualification'].'</p>
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
    <div class="comp_appointment">
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis molestias, id cupiditate ex praesentium laborum odit eveniet libero accusamus voluptatem.</p>
    </div>
    <div class="con_appointment">
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere, nulla?</p>
    </div>
    <div class="pen_appointment">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquam quisquam odio a necessitatibus. Quisquam architecto dicta ea aliquam cum.</p>
    </div>
  <!-- </div> -->
    <!-- </div> -->
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

   
    let main = function(){
      blank.style.display = 'none';
      compAppointment.style.display = 'none'; 
      conAppointment.style.display = 'none';
      penAppointment.style.display = 'none';
      maincontent.classList.remove('hidden');

    }
    dashboard.addEventListener('click', main);

    let info = function(){
      maincontent.classList.add('hidden');
      compAppointment.style.display = 'none';
      conAppointment.style.display = 'none';
      penAppointment.style.display = 'none';
      blank.style.display = 'block';
    
    }
    profile.addEventListener('click', info);

   let com_appointment = function(){
    maincontent.classList.add('hidden');
    blank.style.display = 'none';
    conAppointment.style.display = 'none';
    penAppointment.style.display = 'none';
    compAppointment.style.display = 'block';


   }
   complete.addEventListener('click',com_appointment);
    
   let con_appointment = function(){
    maincontent.classList.add('hidden');
    blank.style.display = 'none';
    compAppointment.style.display = 'none';
    penAppointment.style.display = 'none';
    conAppointment.style.display = 'block';

   }
   confirm.addEventListener('click', con_appointment);
  
   let pen_appointment = function(){
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
