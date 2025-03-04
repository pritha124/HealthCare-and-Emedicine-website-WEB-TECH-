<?php

function getConnection(){
    $con = mysqli_connect('127.0.0.1', 'root', '', 'emedicine');
    return $con;
}

function login($username, $password){
    $con = getConnection();
    $sql = "select * from user where user_name='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count =  mysqli_num_rows($result);

    if($count ==1){
        return true;
    }else{
        return false;
    }
}
function adminLogin($id, $username, $password) {
    $con = getConnection();
    // Corrected the SQL query
    $sql = "SELECT * FROM admins WHERE id='{$id}' AND user_name='{$username}' AND password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        return true;
    } else {
        return false;
    }
}
function checkUserEmail($username, $email)
{
    $con = getConnection();
    $sql = "SELECT * FROM user WHERE username='{$username}' AND email='{$email}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    mysqli_close($con);
    return $count === 1;
}

function updateUserPassword($username, $newPassword)
{
    $con = getConnection();

    $sql = "UPDATE user SET password = '{$newPassword}' WHERE username = '{$username}'";

    if (mysqli_query($con, $sql)) {
        mysqli_close($con);
        return true;
    } else {
        echo "Error: " . mysqli_error($con);
        mysqli_close($con);
        return false;
    }
}

function addUser($username, $password, $email, $phone, $gender, $address, $dob, $bloodGroup){
    $con = getConnection();
    // Make sure the column names match your table structure (e.g., `blood_group` instead of `bloodGroup`)
    $sql = "INSERT INTO user (user_name, password, email, phone, gender, address, dob, blood_group) 
            VALUES ('{$username}', '{$password}', '{$email}', '{$phone}', '{$gender}', '{$address}', '{$dob}', '{$bloodGroup}')";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteUser($id) {
    $con = getConnection();
    $sql = "DELETE FROM user WHERE id='{$id}'"; // Corrected table name

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}




function searchUser($username) {
    $con = getConnection();
    $sql = "SELECT * FROM user WHERE user_name LIKE ?";
    $stmt = mysqli_prepare($con, $sql);

    $searchTerm = "%$username%";
    mysqli_stmt_bind_param($stmt, "s", $searchTerm);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
    return $users;
}


function getAllUser() {
    $con = getConnection();
    $sql = "SELECT * FROM user";
    $result = mysqli_query($con, $sql);
    $user= [];

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $user[] = $row;
        }
        return $user;
    }
}

function getUserById($id) {
    $con = getConnection();
    $sql = "SELECT * FROM user WHERE id='{$id}'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }
    return null;
}

function updateUser($user) {
    $con = getConnection();
    $sql = "UPDATE user SET 
                user_name = '{$user['user_name']}', 
                email = '{$user['email']}', 
                phone = '{$user['phone']}', 
                gender = '{$user['gender']}', 
                address = '{$user['address']}', 
                dob = '{$user['dob']}', 
                blood_group = '{$user['blood_group']}'
            WHERE id = '{$user['id']}'";
    return mysqli_query($con, $sql);
}


function uploadImage($username) {
    $con = getConnection();

    // Check if the file input exists
    if (!isset($_FILES['imageFiles']) || empty($_FILES['imageFiles']['name'][0])) {
        return ["status" => "error", "message" => "No files selected for upload."];
    }

    $uploadDirectory = "../uploads/"; // Directory to store uploaded files
    $allowedFileTypes = ["image/jpeg", "image/png", "image/jpg", "image/gif"]; // Allowed MIME types
    $maxFileSize = 2 * 1024 * 1024; // Maximum file size (2 MB)

    foreach ($_FILES['imageFiles']['name'] as $key => $fileName) {
        $fileTmpName = $_FILES['imageFiles']['tmp_name'][$key];
        $fileSize = $_FILES['imageFiles']['size'][$key];
        $fileType = mime_content_type($fileTmpName);

        // Validate file type
        if (!in_array($fileType, $allowedFileTypes)) {
            return ["status" => "error", "message" => "Invalid file type. Allowed types: JPEG, PNG, JPG, GIF."];
        }

        // Validate file size
        if ($fileSize > $maxFileSize) {
            return ["status" => "error", "message" => "File size exceeds the maximum allowed size of 2 MB."];
        }

        // Generate a unique file name
        $newFileName = $username . "_" . time() . "_" . basename($fileName);
        $targetFilePath = $uploadDirectory . $newFileName;

        // Move the uploaded file to the target directory
        if (move_uploaded_file($fileTmpName, $targetFilePath)) {
            // Update the user's image in the database
            // Replace 'username' with the correct column name, e.g., 'user_name' or 'id'
            $query = "UPDATE user SET image = ? WHERE user_name = ?";
            $stmt = mysqli_prepare($con, $query);
            mysqli_stmt_bind_param($stmt, "ss", $newFileName, $username);
            mysqli_stmt_execute($stmt);

            if (mysqli_stmt_affected_rows($stmt) > 0) {
                mysqli_close($con);
                return ["status" => "success", "message" => "Image uploaded successfully.", "imagePath" => $targetFilePath];
            } else {
                mysqli_close($con);
                return ["status" => "error", "message" => "Failed to update the database."];
            }
        } else {
            return ["status" => "error", "message" => "Failed to upload file."];
        }
    }
}

function uploadFile($username) {
    $con = getConnection();

    // Check if the file input exists
    if (!isset($_FILES['pdfFiles']) || empty($_FILES['pdfFiles']['name'][0])) {
        return ["status" => "error", "message" => "No files selected for upload."];
    }

    $uploadDirectory = "../uploads/"; // Directory to store uploaded files
    $allowedFileTypes = ["application/pdf"]; // Allowed MIME type
    $maxFileSize = 5 * 1024 * 1024; // Maximum file size (5 MB)

    foreach ($_FILES['pdfFiles']['name'] as $key => $fileName) {
        $fileTmpName = $_FILES['pdfFiles']['tmp_name'][$key];
        $fileSize = $_FILES['pdfFiles']['size'][$key];
        $fileType = mime_content_type($fileTmpName);

        // Validate file type
        if (!in_array($fileType, $allowedFileTypes)) {
            return ["status" => "error", "message" => "Invalid file type. Only PDF files are allowed."];
        }

        // Validate file size
        if ($fileSize > $maxFileSize) {
            return ["status" => "error", "message" => "File size exceeds the maximum allowed size of 5 MB."];
        }

        // Generate a unique file name
        $newFileName = $username . "_" . time() . "_" . basename($fileName);
        $targetFilePath = $uploadDirectory . $newFileName;

        // Move the uploaded file to the target directory
        if (move_uploaded_file($fileTmpName, $targetFilePath)) {
            // Update the user's file in the database
            $query = "UPDATE user SET file = ? WHERE user_name = ?";
            $stmt = mysqli_prepare($con, $query);
            mysqli_stmt_bind_param($stmt, "ss", $newFileName, $username);
            mysqli_stmt_execute($stmt);

            if (mysqli_stmt_affected_rows($stmt) > 0) {
                mysqli_close($con);
                return ["status" => "success", "message" => "File uploaded successfully.", "filePath" => $targetFilePath];
            } else {
                mysqli_close($con);
                return ["status" => "error", "message" => "Failed to update the database."];
            }
        } else {
            return ["status" => "error", "message" => "Failed to upload file."];
        }
    }
}

// Function to search doctors
function searchDoctors($term, $option, $department) {
    $con = getConnection();
    $sql = "SELECT * FROM doctors WHERE department LIKE ?";

    // Modify query if searching by name or hospital
    if ($term && $option === 'name') {
        $sql .= " AND name LIKE ?";
    } elseif ($term && $option === 'hospital') {
        $sql .= " AND hospital LIKE ?";
    }
    $stmt = $con->prepare($sql);
    $likeDepartment = "%$department%";
    $likeTerm = "%$term%";
    if ($term) {
        $stmt->bind_param("ss", $likeDepartment, $likeTerm);
    } else {
        $stmt->bind_param("s", $likeDepartment);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    $doctors = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    return $doctors;
}

function addAppointment($department, $date, $time, $problem) {
    $con = getConnection();

    $department = mysqli_real_escape_string($con, $department);
    $date = mysqli_real_escape_string($con, $date);
    $time = mysqli_real_escape_string($con, $time);
    $problem = mysqli_real_escape_string($con, $problem);

    $sql = "INSERT INTO appointment (department, date, time, problem) 
            VALUES ('{$department}', '{$date}', '{$time}', '{$problem}')";

    if (mysqli_query($con, $sql)) {
        return array('success' => true);
    } else {
        return array('success' => false);
    }
}
function getFAQs()
{
    $conn = getConnection();
    $sql = "SELECT * FROM faqs";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $faqs = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        $faqs = [];
    }

    mysqli_close($conn);
    return $faqs;
}
function insertOrder($orderType, $items, $totalPrice, $paymentMethod)
{
    $conn = getConnection();

    try {

        $query = "INSERT INTO orders (order_type, total_price, payment_method) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sds", $orderType, $totalPrice, $paymentMethod);
        $stmt->execute();

        $orderId = $stmt->insert_id;

        foreach ($items as $item) {
            $medicineId = $item['medicine_id'];
            $quantity = $item['quantity'];
            $itemTotalPrice = $item['total_price'];

            $queryItems = "INSERT INTO order_items (order_id, medicine_id, quantity, total_price) VALUES (?, ?, ?, ?)";
            $stmtItems = $conn->prepare($queryItems);
            $stmtItems->bind_param("iiid", $orderId, $medicineId, $quantity, $itemTotalPrice);
            $stmtItems->execute();
        }

        return true;
    } catch (Exception $e) {
        error_log("Error inserting order: " . $e->getMessage());
        return false;
    } finally {
        $conn->close();
    }
}
function getHospitalByName($searchTerm)
{
    $con = getConnection();
    $sql = "SELECT id, name, address, hotline_number FROM hospital WHERE name LIKE '%$searchTerm%'";
    $result = mysqli_query($con, $sql);

    $hospitals = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $hospitals[] = $row;
    }
    return $hospitals;
}

function searchMedicine($searchTerm)
{
    $con = getConnection();
    $sql = "SELECT name, generic_name, mg, unit_price FROM medicine WHERE name LIKE '%$searchTerm%'";
    $result = mysqli_query($con, $sql);

    $medicines = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $medicines[] = $row;
    }
    return $medicines;
}

function getAppointments() {
    $con = getConnection();
    $sql = "SELECT * FROM appointment";
    $result = mysqli_query($con, $sql); // Execute the query

    $appointments = []; // Array to hold all appointments
    while ($row = mysqli_fetch_assoc($result)) {  // Fetch each row
        $appointments[] = $row;
    }

    return $appointments;  // Return the array of appointments
}




?>