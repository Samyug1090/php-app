<?php
session_start();

// Check if OTP is submitted
if (isset($_POST['otp_submit'])) {
    // Check if OTP matches the one stored in the session
    if ($_POST['otp'] == $_SESSION['otp']) {
        // Redirect to the next page upon successful OTP verification
        header("Location: next-page.php");
        exit;
    } else {
        // Invalid OTP, display error message
        $error = "Invalid OTP. Please enter the correct OTP for verification.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
</head>

<body>
    <h2>OTP Verification</h2>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <form action="otp-verification.php" method="post">
        <label for="otp">Enter OTP:</label>
        <input type="text" id="otp" name="otp" required>
        <input type="submit" name="otp_submit" value="Verify">
    </form>
</body>

</html>
