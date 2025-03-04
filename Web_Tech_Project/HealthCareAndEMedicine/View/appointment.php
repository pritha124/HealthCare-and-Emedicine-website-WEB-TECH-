<?php
session_start();
require_once('../model/userModel.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submitAppointment'])) {
    $data = json_decode($_POST['appointmentData'], true);

    $department = $data['department'];
    $date = $data['date'];
    $time = $data['time'];
    $problem = $data['problem'];

    $result = addAppointment($department, $date, $time, $problem);

    if ($result['success']) {
        echo json_encode(array("success" => true, "message" => "Appointment successfully submitted!"));
    } else {
        echo json_encode(array("success" => false, "message" => "Error submitting appointment. Please try again."));
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule an Appointment</title>
    <link rel="stylesheet" href="../Static/css/appointment.css">
    <script>
        function validateForm() {
            const department = document.getElementById("department").value.trim();
            const date = document.getElementById("date").value.trim();
            const time = document.getElementById("time").value.trim();
            const problem = document.getElementById("problem").value.trim();
            let valid = true;
            let message = "";

            if (department === "") {
                valid = false;
                message += "Please choose a department.\n";
            }
            if (date === "") {
                valid = false;
                message += "Please select a date.\n";
            }
            if (time === "") {
                valid = false;
                message += "Please select a time.\n";
            }
            if (problem === "") {
                valid = false;
                message += "Please describe your problem.\n";
            }

            if (!valid) {
                alert(message);
            }

            return valid;
        }

        function ajaxSubmit() {
            if (validateForm()) {
                let department = document.getElementById("department").value.trim();
                let date = document.getElementById("date").value.trim();
                let time = document.getElementById("time").value.trim();
                let problem = document.getElementById("problem").value.trim();

                let appointmentData = {
                    department: department,
                    date: date,
                    time: time,
                    problem: problem
                };

                let xhttp = new XMLHttpRequest();
                xhttp.open("POST", "", true);
                xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.send("appointmentData=" + JSON.stringify(appointmentData) + "&submitAppointment=true");

                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        let response = JSON.parse(this.responseText);
                        let responseMessage = document.getElementById('responseMessage');

                        if (response.success) {
                            responseMessage.innerHTML = '<p style="color: green;">' + response.message + '</p>';
                        } else {
                            responseMessage.innerHTML = '<p style="color: red;">' + response.message + '</p>';
                        }
                    }
                };
            }
        }
    </script>
</head>
<body>
    <header>
        <h1>Schedule an Appointment</h1>
    </header>

    <main>
        <form id="appointmentForm" onsubmit="event.preventDefault(); ajaxSubmit();">
            <label for="department">Choose Department:</label>
            <select id="department" name="department" required>
                <option value="">Select a Department</option>
                <option value="Cardiology">Cardiology</option>
                <option value="Neurology">Neurology</option>
                <option value="Skin">Skin</option>
                <option value="Dental">Dental</option>
                <option value="Orthopedics">Orthopedics</option>
            </select>

            <label for="date">Select Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Select Time:</label>
            <input type="time" id="time" name="time" required>

            <label for="problem">Describe Your Problem:</label>
            <textarea id="problem" name="problem" required></textarea>

            <button type="submit">Submit Appointment</button>

            <button type="button" onclick="location.href='home.html'">Back</button>
            <button type="button" onclick="location.href='userProfile.php'">User Profile</button>
        </form>

        <div id="responseMessage"></div>
    </main>
</body>
</html>
