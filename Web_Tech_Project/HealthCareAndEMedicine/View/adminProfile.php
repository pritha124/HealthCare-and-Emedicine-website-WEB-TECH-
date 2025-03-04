<?php
session_start();
require_once('../Model/userModel.php');

if (isset($_COOKIE['flag'])) {

    $appointments = getAppointments();
    ?>

    <html lang="en">
    <head>
        <title>Admin Home</title>
        <link rel="stylesheet" href="../Static/css/adminProfile.css">
    </head>
    <body>
    <h1>Welcome Home, <?php echo $_SESSION['username']?></h1>

    <div class="admin-actions">
        <a href="../View/userlist.php">View All Users</a>
        <a href="../View/searchUser.php">Search Users</a>
        <a href="../Controller/logout.php">Logout</a>
    </div>

    <hr>

    <h2>All Submitted Appointments</h2>
    <?php if (count($appointments) > 0): ?>
        <table>
            <thead>
            <tr>
                <th>Department</th>
                <th>Date</th>
                <th>Time</th>
                <th>Problem</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($appointments as $appointment): ?>
                <tr>
                    <td><?php echo $appointment['department']; ?></td>
                    <td><?php echo $appointment['date']; ?></td>
                    <td><?php echo $appointment['time']; ?></td>
                    <td><?php echo $appointment['problem']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No appointments submitted yet.</p>
    <?php endif; ?>
    </body>
    </html>

    <?php
} else {
    header('location: adminLogin.html');
}



