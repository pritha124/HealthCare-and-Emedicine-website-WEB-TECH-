<?php
session_start();
require_once('../Model/userModel.php');
if(isset($_COOKIE['flag'])){
$con = getConnection();
// Ensure the username is fetched correctly from the session
if (isset($_SESSION['user_name'])) {
    $username = $_SESSION['user_name']; // Assuming the username is stored in the session

    // Escape the username to prevent SQL injection
    $username = mysqli_real_escape_string($con, $username);

    // Use quotes for string values in SQL query
    $sql = "SELECT image FROM user WHERE user_name = '$username'";
    $result = mysqli_query($con, $sql);

    $imagePath = "default.jpg"; // Default image path

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (!empty($row['image'])) {
            $imagePath = $row['image'];
        }
    }else{

    }
}

    ?>

<html>
<head>
    <title>User's Profile</title>
    <link rel="stylesheet" type="text/css" href="../Static/css/userProfile.css">
    <script>
        function showImageUploadSection() {
            document.getElementById('uploadImageSection').style.display = 'block';
        }

        function hideImageUploadSection() {
            document.getElementById('uploadImageSection').style.display = 'none';
        }
        function showFileUploadSection() {
            document.getElementById('uploadFileSection').style.display = 'block';
        }

        function hideFileUploadSection() {
            document.getElementById('uploadFileSection').style.display = 'none';
        }
    </script>
</head>

<body>

    <center>
        <h1>Welcome Home! <?php echo $_SESSION['username']?></h1>
        <img src="" width="160px" height="220px" alt="Profile Picture" />

        <a href="#" onclick="showImageUploadSection()">Upload Profile Picture</a> </br>
        <fieldset id="uploadImageSection" style="width: 75%; margin: 30px auto; padding: 20px; display: none;">
            <h2>Upload Image Files</h2>
            <form action="userUploadImage.php" method="post" enctype="multipart/form-data">
                <label for="imageFiles">Select Image Files:</label>
                <input type="file" id="imageFiles" name="imageFiles[]" multiple accept="image/*">
                <button type="submit">Upload Files</button>
                <button type="button" onclick="hideImageUploadSection()">Cancel</button>
            </form>
        </fieldset>


        <a href="#" onclick="showFileUploadSection()">Upload File</a></br>
        <fieldset id="uploadFileSection" style="width: 75%; margin: 30px auto; padding: 20px; display: none;">
            <h2>Upload PDF Files</h2>
            <form action="userUploadFile.php" method="post" enctype="multipart/form-data">
                <label for="pdfFiles">Select PDF Files:</label>
                <input type="file" id="pdfFiles" name="pdfFiles[]" multiple accept="application/pdf">
                <button type="submit">Upload Files</button>
                <button type="button" onclick="hideFileUploadSection()">Cancel</button>
            </form>
        </fieldset>


        <a href="../Controller/logout.php">View All Information</a></br>
        <a href="../Controller/editUser.php">Edit Information</a> </br>
        <a href="../View/userlist.php">View Uploaded Files</a> </br>
        <a href="../View/searchUser.php">Ask Questions</a></br>
        <a href="../Controller/logout.php">Logout</a>
    </center>
    <h3><button onclick="location.href='home.html'">Back</button></h3>



</body>
</html>

    <?php
}else {
    header('location: login.html');
}
?>