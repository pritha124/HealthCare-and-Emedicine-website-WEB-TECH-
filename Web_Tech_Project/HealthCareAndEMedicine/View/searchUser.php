<?php
session_start();
require_once('../Model/userModel.php'); // Include the file with the getConnection() function

if (isset($_COOKIE['flag'])) {
    ?>

    <html lang="en">
    <head>
        <title>Search User</title>
        <link rel="stylesheet" type="text/css" href="../Static/css/searchUser.css">
    </head>
    <body>
    <h1>Search for Users</h1>
    <form username="searchForm" method="POST" action="">
        <input type="text" name="username" id="username" placeholder="Enter username" required>
        <button type="submit" name="search">Search</button>
    </form>

    <div id="results">
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['search'])) {
            $username = $_POST['username'];
            $user = searchUser($username); // Call the function from userModel.php

            if (count($user) > 0) {


                foreach ($user as $user) {
                    echo "<tr>
                            <tr>ID:</tr>.<td>" . htmlspecialchars($user['id']) . "</td></br>
                            <tr>Name</tr>.<td>" . htmlspecialchars($user['user_name']) . "</td></br>
                            <tr>Email</tr>.<td>" . htmlspecialchars($user['email']) . "</td></br>
                            <tr>Phone</tr>.<td>" . htmlspecialchars($user['phone']) . "</td></br>
                            <tr>Gender</tr>.<td>" . htmlspecialchars($user['gender']) . "</td></br>
                            <tr>Address</tr>.<td>" . htmlspecialchars($user['address']) . "</td></br>
                            <tr>Date of Birth</tr>.<td>" . htmlspecialchars($user['dob']) . "</td></br>
                            <tr>Blood Group</tr>.<td>" . htmlspecialchars($user['blood_group']) . "</td></br>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No users found matching the query.</p>";
            }
        }
        ?>
    </div>
    </body>
    </html>

    <?php
} else {
    header('location: adminProfile.php');
}
?>
