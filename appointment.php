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
        <h2>Set Appointment</h2>
        <form action="" id="appointment">
            <div class="book_container">
                <div class="book_content">
                    <label for="date" class="date-label">Select Date:</label>
                    <input type="date" name="date" id="date">
                </div>

                <div class="book_content">
                    <label for="time" id="label-time">Select Time:</label>

                    <input type="radio" name="time" id="time-1">
                    <label for="time-1" class="time-label">8:00AM</label>

                    <input type="radio" name="time" id="time-2">
                    <label for="time-2" class="time-label">9:00AM</label>

                    <input type="radio" name="time" id="time-3">
                    <label for="time-3" class="time-label">10:00AM</label>


                </div>
            </div>
            <button type="submit" name="book" id="book">Book</button>
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
                    <th>Remarks</th>
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
                <td>Cancel</td>
            </tr>
            <tr>
                <td>2</td>
                <td>John Doe</td>
                <td>Bir Hospital</td>
                <td>Dermaologist</td>
                <td>20March</td>
                <td>9:00AM</td>
                <td>Request</td>
                <td>Cancel</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
        </Table>
    </div>
</body>

</html>