<?php

session_start();
require_once('../Model/userModel.php'); // Include the file with the getConnection() function

if (isset($_COOKIE['flag'])) {
    ?>
    <html lang="en">
    <head>
        <title>User List</title>
        <link rel="stylesheet" type="text/css" href="../Static/css/userList.css">
    </head>
    <body>
    <h2>User List</h2>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Date of Birth</th>
            <th>Blood Group</th>
        </tr>
        <?php
        // Loop through the data fetched from the database
        $user = getAllUser();
        foreach ($user as $user) {
            ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['user_name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['phone']; ?></td>
                <td><?php echo $user['gender']; ?></td>
                <td><?php echo $user['address']; ?></td>
                <td><?php echo $user['dob']; ?></td>
                <td><?php echo $user['blood_group']; ?></td>

                <td><a href='../Controller/editUser.php?id=<?=$user['id']?>'>EDIT</a></td>
                <td><a href='../Controller/deleteUser.php?id=<?=$user['id']?>'>DELETE</a></td>

            </tr>
        <?php } ?>
    </table>
    <button type="button" onclick="location.href='adminProfile.php'">Back</button>
    </body>
    </html>

    <?php
} else {
    header('location: adminProfile.php');
}

?>
