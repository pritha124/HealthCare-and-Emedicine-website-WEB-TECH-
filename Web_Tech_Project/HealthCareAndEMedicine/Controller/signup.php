<?php
require_once('../Model/userModel.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_REQUEST['user_name']);
    $password = trim($_REQUEST['password']);
    $email = trim($_REQUEST['email']);
    $phone = trim($_REQUEST['phone']);
    $gender = trim($_REQUEST['gender']);
    $address = trim($_REQUEST['address']);
    $dob = trim($_REQUEST['dob']);
    $bloodGroup = trim($_REQUEST['blood_group']);

    // Validate required fields
    if (empty($username) || empty($password) || empty($email)) {
        echo "Error: Username, Password, and Email are required fields.";
        exit;
    }

    // Add the user to the database
    $status = addUser($username, $password, $email, $phone, $gender, $address, $dob, $bloodGroup);

    if ($status) {
        echo "Success: User has been successfully registered.";
    } else {
        echo "Error: Failed to register user. Please try again.";
    }
} else {
    echo "Error: Invalid request method.";
}


?>