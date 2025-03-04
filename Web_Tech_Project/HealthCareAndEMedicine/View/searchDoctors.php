<?php
session_start();

include('../Model/userModel.php');

$department = isset($_GET['department']) ? $_GET['department'] : '';

// Variables for search term and option
$searchTerm = '';
$searchOption = '';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchTerm = $_POST['name'];
    $searchOption = $_POST['search-option'];
}


$doctors = searchDoctors($searchTerm, $searchOption, $department);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Doctors</title>
    <link rel="stylesheet" type="text/css" href="../Static/css/searchDoctors.css">
</head>
<body>
    <h2>Department: <?php echo htmlspecialchars($department); ?></h2>
    
    <form method="post">
        <label for="search-bar">Search:</label>
        <input type="text" id="search-bar" name="name" placeholder="Enter doctor details" value="<?php echo htmlspecialchars($searchTerm); ?>">
        
        <select id="search-option" name="search-option">
            <option value="hospital" <?php echo ($searchOption == 'hospital' ? 'selected' : ''); ?>>Search by Hospital</option>
            <option value="name" <?php echo ($searchOption == 'name' ? 'selected' : ''); ?>>Search by Name</option>
        </select>
        
        <input type="submit" value="Search">
    </form>

    <table>
        <tr>
            <th>Name</th>
            <th>Degree</th>
            <th>Department</th>
            <th>Working Hour</th>
            <th>Off Day</th>
            <th>Appointment</th>
            <th>Details</th>
        </tr>
        <?php if ($doctors): ?>
            <?php foreach ($doctors as $doctor): ?>
            <tr>
                <td><?php echo htmlspecialchars($doctor['name']); ?></td>
                <td><?php echo htmlspecialchars($doctor['degree']); ?></td>
                <td><?php echo htmlspecialchars($doctor['department']); ?></td>
                <td><?php echo htmlspecialchars($doctor['working_hour']); ?></td>
                <td><?php echo htmlspecialchars($doctor['off_day']); ?></td>
                <td><?php echo htmlspecialchars($doctor['appointment']); ?></td>
                <td><a href="doctorProfile.php?id=<?php echo $doctor['id']; ?>">View Profile</a></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">No doctors found matching the search criteria.</td>
            </tr>
        <?php endif; ?>
    </table>

    <table>
        <tr>
            <td><button onclick="location.href='department.html'">Back</button></td>
            <td><button onclick="location.href='doctorsProfile.html'">Next</button></td>
        </tr>
    </table>
</body>
</html>
