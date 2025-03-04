<?php
session_start();
require_once('../Model/userModel.php');

if (isset($_COOKIE['flag'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $user = getUserById($id);
        if (!$user) {
            echo "User not found.";
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $updatedUser = [
                'id' => $id,
                'user_name' => $_POST['user_name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'gender' => $_POST['gender'],
                'address' => $_POST['address'],
                'dob' => $_POST['dob'],
                'blood_group' => $_POST['blood_group']
            ];

            if (updateUser($updatedUser)) {
                echo "User updated successfully!";
                header("Location: ../View/userList.php");
                exit;
            } else {
                echo "Failed to update user.";
            }
        }
    } else {
        echo "No user ID provided!";
    }
} else {
    header('location: ../View/adminProfile.php');
    exit;
}
?>