<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

// Include the Twilio SDK's autoload.php file
require_once __DIR__ . '/Twilio/autoload.php';

use Twilio\Rest\Client;

// **Security Consideration:** Store sensitive credentials securely (e.g., environment variables)
$account_sid = 'ACb3e7865903a22620ba39f502c01e27c3';
$auth_token = 'df72bba66ce2c322cfecd2d0969ff696';
$twilio_number = '+13344535285';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"])) {
  $action = $_POST["action"];

  switch ($action) {
    case "send_otp":
      sendOTP();
      break;
    case "verify_otp":
      verifyOTP();
      break;
    default:
      echo json_encode(array("type" => "error", "message" => "Invalid action"));
  }
}

function sendOTP() {
  global $account_sid, $auth_token, $twilio_number;

  if (isset($_POST["mobile_number"])) {
    $mobile_number = $_POST["mobile_number"];
    $otp = generateOTP();

    $client = new Client($account_sid, $auth_token);

    try {
      $message = $client->messages->create(
        $mobile_number,
        array(
          'from' => $twilio_number,
          'body' => "Your OTP for appointment booking is: $otp"
        )
      );
      $_SESSION["otp"] = $otp;
      echo json_encode(array("type" => "success"));
    } catch (Exception $e) {
      echo json_encode(array("type" => "error", "message" => "Failed to send OTP: " . $e->getMessage()));
    }
  } else {
    echo json_encode(array("type" => "error", "message" => "Mobile number not provided"));
  }
}

function verifyOTP() {
  if (isset($_POST["otp"]) && isset($_SESSION["otp"])) {
    $otp = $_POST["otp"];
    $stored_otp = $_SESSION["otp"];

    if ($otp == $stored_otp) {
      echo json_encode(array("type" => "success"));
    } else {
      echo json_encode(array("type" => "error", "message" => "Invalid OTP"));
    }
  } else {
    echo json_encode(array("type" => "error", "message" => "OTP not provided"));
  }
}

function generateOTP() {
  // Consider using a cryptographically secure random number generator (CSPRNG)
  return rand(100000, 999999);
}
