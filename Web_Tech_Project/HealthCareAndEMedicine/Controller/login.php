<?php
session_start();
require_once('../model/userModel.php');

// Accept JSON input
$data = json_decode(file_get_contents('php://input'), true);

// Extract username and password
$username = trim($data['username'] ?? '');
$password = trim($data['password'] ?? '');

// Validate the inputs
if (empty($username) || empty($password)) {
    // Return JSON error response
    echo json_encode([
        "status" => "error",
        "message" => "Username or password cannot be empty."
    ]);
    exit;
}

// Authenticate the user
$status = login($username, $password);

if ($status) {
    setcookie('flag', 'true', time() + 3600, '/');
    $_SESSION['username'] = $username;

    // Return JSON success response
    echo json_encode([
        "status" => "success",
        "message" => "Login successful. Redirecting to user profile..."
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid username or password."
    ]);
}


?>