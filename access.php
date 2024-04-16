<?php
// Include the database connection file
include_once('db_connection.php');

// Check if the connection is successful
if ($connection) {
    // Query to select all appointments from the appointments table
    $query = "SELECT * FROM appointments";

    // Execute the query
    $result = mysqli_query($connection, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch and display appointment data
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Appointment ID: " . $row['id'] . "<br>";
            echo "Name: " . $row['name'] . "<br>";
            echo "Date: " . $row['date'] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "Error: " . mysqli_error($connection);
    }

    // Close the database connection
    mysqli_close($connection);
} else {
    echo "Failed to connect to the database.";
}
?>
