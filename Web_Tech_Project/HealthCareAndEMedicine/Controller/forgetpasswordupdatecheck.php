<?php

session_start();

include '../model/userModel.php';

if (isset($_POST['submit'])) {

    if (!isset($_SESSION['username'])) {
        echo "Session expired or invalid. Please restart the process.";
        exit;
    }

    $username = $_SESSION['username'];
    $newPassword = trim($_POST['newpassword']); 
    $confirmPassword = trim($_POST['confirmpassword']);

    if (empty($newPassword) || empty($confirmPassword)) {
        echo "Both password fields are required.";
        exit;
    }

    if ($newPassword !== $confirmPassword) {
        echo "Passwords do not match. Please try again.";
        exit;
    }

    if (updateUserPassword($username, $newPassword)) {
     
        echo "Password updated successfully! You can now log in with your new password.";
        session_destroy(); 
        header("Location:../View/login.html"); 
        exit;
    } else {
        echo "Failed to update password. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>