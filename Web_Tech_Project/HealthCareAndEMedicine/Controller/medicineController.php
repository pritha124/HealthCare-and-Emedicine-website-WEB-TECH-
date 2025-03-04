<?php
require_once('../model/userModel.php');

if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
    $medicines = searchMedicine($searchTerm);
    echo json_encode($medicines);
}
?>
