<?php
session_start();
require_once('../Model/userModel.php'); // Include the file with the getConnection() function

// Check for user authentication via the cookie
if (!isset($_COOKIE['flag'])) {
    header('Content-Type: application/json');
    echo json_encode([
        "status" => "error",
        "message" => "Unauthorized access."
    ]);
    exit;
}

// Accept JSON input
$data = json_decode(file_get_contents('php://input'), true);

// Check if username exists in the JSON input
$username = trim($data['username'] ?? '');

// Validate the input
if (empty($username)) {
    header('Content-Type: application/json');
    echo json_encode([
        "status" => "error",
        "message" => "Username cannot be empty."
    ]);
    exit;
}

// Fetch user data from the database using the searchUser() function
$users = searchUser($username);

// Prepare the JSON response
if (count($users) > 0) {
    header('Content-Type: application/json');
    echo json_encode([
        "status" => "success",
        "data" => $users
    ]);
} else {
    header('Content-Type: application/json');
    echo json_encode([
        "status" => "error",
        "message" => "No users found matching the query."
    ]);
}
?>
