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
        <a href="">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="">
          <i class="fas fa-user"></i>
          <span>Profile</span>
        </a>
      </li>
      <li>
        <a href="">
          <i class="fas fa-chart-bar"></i>
          <span>Statistics</span>
        </a>
      </li>
      <li>
        <a href="">
          <i class="fas fa-briefcase"></i>
          <span>Careers</span>
        </a>
      </li>
      <li>
        <a href="">
          <i class="fas fa-question-circle"></i>
          <span>FAQ</span>
        </a>
      </li>
      <li>
        <a href="">
          <i class="fas fa-star"></i>
          <span>Testominals</span>
        </a>
      </li>
      <li>
        <a href="">
          <i class="fas fa-cog"></i>
          <span>Settings</span>
        </a>
      </li>
      <li class="logout">
        <a href="" >
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>
  </div>

  <div class="main_content">
    <div class="header">
      <div class="header_title">
        <span>Primary</span>
        <h2>Dashboard</h2>
      </div>
      <div class="user_info">
        <div class="search_box">

          <i class="fa-solid fa-search"></i>
          <input type="text" placeholder="Search"/>
        </div>
        <img src="images/doctor.png" alt="">
        </div>
    </div>

    <div class="card_container">
      <h3 class="main_title">Today's date</h3>
      <div class="card">
        <div class="payment_card light-red">
          <div class="card_header">
            <div class="amount">
              <span class="title">
                Payment amount
              </span>
              <span class="amount_value">
                $500.00
              </span>
            </div>
            <i class="fas fa-dollar-sign icon">
            </i>
          </div>
          <span class="card_detail">
            **** **** **** 3484
          </span>
        </div>

        <div class="payment_card light-purple">
          <div class="card_header">
            <div class="amount">
              <span class="title">
                Payment order
              </span>
              <span class="amount_value">
                $200.00
              </span>
            </div>
            <i class="fas fa-list icon dark-purple">
            </i>
          </div>
          <span class="card_detail">
            **** **** **** 5544
          </span>
        </div>

        <div class="payment_card light-green">
          <div class="card_header">
            <div class="amount">
              <span class="title">
                Payment customer
              </span>
              <span class="amount_value">
                $350.00
              </span>
            </div>
            <i class="fas fa-users icon dark-green">
            </i>
          </div>
          <span class="card_detail">
            **** **** **** 8896
          </span>
        </div>

        <div class="payment_card light-blue">
          <div class="card_header">
            <div class="amount">
              <span class="title">
                Payment proceed
              </span>
              <span class="amount_value">
                $150.00
              </span>
            </div>
            <i class="fas fa-check icon dark-blue">
            </i>
          </div>
          <span class="card_detail">
            **** **** **** 5544
          </span>
        </div>

      </div>
    </div>

    <div class="tabular">
      <h3 class="main_title">Finance data</h3>
      <div class="table_container">
        <table>
          <thead>
            <tr>
              <th>Date</th>
              <th>Transaction Type</th>
              <th>Description</th>
              <th>Amount</th>
              <th>Category</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
            <tbody>
              <tr>
                <td>
                  2023-05-01
                </td>
                <td>Expenses</td>
                <td>Office Supplies</td>
                <td>$250</td>
                <td>Office Expenses</td>
                <td>Pending</td>
                <td><button>Edit</button></td>
              </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>