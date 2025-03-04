<?php
session_start();
require_once('../model/userModel.php');

if (isset($_POST['id']) && isset($_POST['username']) && isset($_POST['password'])) {
    $id = trim($_POST['id']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($id == null || $username == null || empty($password)) {
        echo "Null data found!";
    } else {
        $status = adminLogin($id, $username, $password);
        if ($status) {
            // Set session and cookie for successful login
            setcookie('flag', 'true', time() + 3600, '/');
            $_SESSION['username'] = $username;

            // Return success message for AJAX response
            echo "Success: Login successful!";
        } else {
            echo "Invalid username or password!";
        }
    }
} else {
    echo "Invalid request!";
}


?>

