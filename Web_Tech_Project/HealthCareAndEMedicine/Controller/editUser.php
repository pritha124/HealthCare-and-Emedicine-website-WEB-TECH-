<?php
session_start();
require_once('../Model/userModel.php'); // Include the file with the getUserById and updateUser functions

if (isset($_COOKIE['flag'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Fetch user data based on ID
        $user = getUserById($id);
        if (!$user) {
            echo "User not found.";
            exit;
        }

        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the updated user data from the form
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

            // Call updateUser to update user in database
            if (updateUser($updatedUser)) {
                echo "User updated successfully!";
                header("Location: ../View/userList.php"); // Redirect back to the user list
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

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="../Static/css/editUser.css"> <!-- Add your own CSS file -->
    <script>
        // JavaScript validation function
        function validateForm() {

            // Check if any field is empty
            if (userName === "" || email === "" || phone === "" || gender === "" || address === "" || dob === "" || bloodGroup === "") {
                alert("All fields must be filled out.");
                return false;
            }

            // Validate email format
            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            // Validate phone number (optional: only numbers)
            var phonePattern = /^[0-9]+$/;
            if (!phonePattern.test(phone)) {
                alert("Please enter a valid phone number (numbers only).");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<h2>Edit User Details</h2>


<form method="POST" action="editUser.php?id=<?php echo $user['id']; ?>">
    <table>
        <tr>
            <td><label for="user_name">Username:</label></td>
            <td><input type="text" id="user_name" name="user_name" value="<?php echo htmlspecialchars($user['user_name']); ?>" required></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required></td>
        </tr>
        <tr>
            <td><label for="phone">Phone:</label></td>
            <td><input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>" required></td>
        </tr>
        <tr>
            <td><label for="gender">Gender:</label></td>
            <td>
                <select id="gender" name="gender" required>
                    <option value="Male" <?php echo $user['gender'] == 'Male' ? 'selected' : ''; ?>>Male</option>
                    <option value="Female" <?php echo $user['gender'] == 'Female' ? 'selected' : ''; ?>>Female</option>
                    <option value="Other" <?php echo $user['gender'] == 'Other' ? 'selected' : ''; ?>>Other</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="address">Address:</label></td>
            <td><input type="text" id="address" name="address" value="<?php echo htmlspecialchars($user['address']); ?>" required></td>
        </tr>
        <tr>
            <td><label for="dob">Date of Birth:</label></td>
            <td><input type="date" id="dob" name="dob" value="<?php echo htmlspecialchars($user['dob']); ?>" required></td>
        </tr>
        <tr>
            <td><label for="blood_group">Blood Group:</label></td>
            <td><input type="text" id="blood_group" name="blood_group" value="<?php echo htmlspecialchars($user['blood_group']); ?>" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Update User">
                <button type="button" onclick="location.href=' ../View/userList.php'">Back</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
