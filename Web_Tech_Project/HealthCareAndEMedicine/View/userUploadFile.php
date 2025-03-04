<?php
session_start();
require_once('../Model/userModel.php'); // Include the database connection file

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
// Handle the file upload
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_SESSION['username'];
    $response = uploadFile($username);

    // Redirect to the profile page with a status message
    $_SESSION['upload_status'] = $response;
    header("Location: userProfile.php");
    exit();
}
?>
