<?php
// Include your database connection script
$mysqli = require __DIR__ . "/database.php";

// Check if form data has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if all required fields are present
    if (
        isset($_POST["fName"]) &&
        isset($_POST["lName"]) &&
        isset($_POST["email"]) &&
        isset($_POST["phonenum"]) &&
        isset($_POST["doctor"])
    ) {
        // Extract form data
        $fName = $_POST["fName"];
        $lName = $_POST["lName"];
        $email = $_POST["email"];
        $phonenum = $_POST["phonenum"];
        $doctor = $_POST["doctor"];

        // Prepare SQL statement
        $sql = "INSERT INTO appointment (fName, lName, email, phonenum, doctor)
                VALUES (?, ?, ?, ?, ?)";

        // Initialize a prepared statement
        $stmt = $mysqli->prepare($sql);

        // Bind parameters
        $stmt->bind_param("sssis", $fName, $lName, $email, $phonenum, $doctor);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to a success page or homepage
            header("Location: index.php");
            exit;
        } else {
            // If execution fails, display an error message
            echo "Error: " . $mysqli->error;
        }
    } else {
        // If required fields are missing, display an error message
        echo "Error: Required fields are missing.";
    }
} else {
    // If form data is not submitted via POST method, display an error message
    echo "Error: Form not submitted.";
}
?>
