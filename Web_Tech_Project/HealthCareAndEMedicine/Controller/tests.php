<?php
require_once('../Model/userModel.php'); // Include the database connection file
function tests($searchOption, $searchTerm) {
    // Establish the database connection
    $connection = getConnection();

    // Initialize the query
    $query = "SELECT * FROM tests";
    $parameters = [];

    // Modify the query based on the search criteria
    if (!empty($searchTerm)) {
        if ($searchOption === 'hospital') {
            $query .= " WHERE hospital LIKE ?";
        } elseif ($searchOption === 'name') {
            $query .= " WHERE test_name LIKE ?";
        }
        $parameters[] = "%" . $searchTerm . "%";
    }

    // Prepare and execute the query
    $stmt = mysqli_prepare($connection, $query);
    if (!empty($parameters)) {
        mysqli_stmt_bind_param($stmt, str_repeat("s", count($parameters)), ...$parameters);
    }
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
        // Fetch and display the results
        echo "<h2>Search Results</h2>";
        echo "<table border='1' style='width: 80%; margin: auto; text-align: center;'>";
        echo "<tr>
                <th>ID</th>
                <th>Test Name</th>
                <th>Hospital</th>
                <th>Price</th>
                <th>Discount</th>
              </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['id']) . "</td>
                    <td>" . htmlspecialchars($row['test_name']) . "</td>
                    <td>" . htmlspecialchars($row['hospital']) . "</td>
                    <td>" . htmlspecialchars($row['price']) . "</td>
                    <td>" . htmlspecialchars($row['discount']) . "</td>
                  </tr>";


        }
        echo "</table>";
        echo "<button onclick=\"location.href='../View/tests.html'\">Back</button>";
    } else {
        // No results found
        echo "<h2>No results found for the search criteria.</h2>";
    }

    // Free the result set and close the connection
    mysqli_free_result($result);
    mysqli_close($connection);
}

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the search criteria from the form
    $searchOption = $_POST['search-option'];
    $searchTerm = trim($_POST['name']);

    // Call the tests function
    tests($searchOption, $searchTerm);
} else {
    // Redirect back to the search form if accessed directly
    header("Location: tests.html");
    exit();
}
?>
