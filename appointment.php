<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" href="css/appointment.css">
</head>

<body>
    
    <div class="container">
        <a href="index.php">Home</a>
        <h2>Set Appointment</h2>
        <form action="includes/appointment.inc.php" id="appointment" method="POST">
            <div class="book_container">
                
                <div class="book_content">
                <input type="hidden" name="doctor_id" value="<?php echo isset($_GET['doctor_id']) ? $_GET['doctor_id'] : ''; ?>">
                    <label for="date" class="date-label">Select Date:</label>
                    <input type="date" name="date" id="date">
                   
                </div>

                <div class="book_content">
                    <label for="time" id="label-time">Select Time:</label>

                    <input type="time" name="time" id="time">
                  


                </div>
            </div>
            <button type="submit" name="submit" id="book">Book</button>
        </form>
        <Table>
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Doctor Name</th>
                    <th>Clinics/Hospital Name</th>
                    <th>Speciality</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                   
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>Bir Hospital</td>
                <td>Dermaologist</td>
                <td>15March</td>
                <td>8:00AM</td>
                <td>Approved</td>
                
            </tr>
            <tr>
                <td>2</td>
                <td>John Doe</td>
                <td>Bir Hospital</td>
                <td>Dermaologist</td>
                <td>20March</td>
                <td>9:00AM</td>
                <td>Request</td>
                
            </tr>
            
        </tbody>
        </Table>
    </div>
</body>

</html>