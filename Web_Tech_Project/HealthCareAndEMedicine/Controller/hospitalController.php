<?php
require_once('../model/userModel.php');

if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
    $hospitals = searchHospitals($searchTerm);
    echo json_encode($hospitals);
}

function searchHospitals($searchTerm)
{
    $conn = getConnection();
    $sql = "SELECT id, name, address, hotline_number FROM hospital WHERE name LIKE '%$searchTerm%'";
    $result = mysqli_query($conn, $sql);

    $hospitals = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $hospitals[] = $row;
    }

    return $hospitals;
}
?>
