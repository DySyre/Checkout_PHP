<?php
session_start();
require_once '../config.php';

// Check if customer_id exists in session
if (!isset($_SESSION['customer_id'])) {
    die("Session expired. Please go back and re-enter your information.");
}

// Get form inputs
$customer_id     = $_SESSION['customer_id'];
$card_type       = trim($_POST['card_type']);
$card_number     = trim($_POST['card_number']);
$card_exp_date   = trim($_POST['card_exp_date']);

// Insert into payment_details
$sql = "INSERT INTO payment_details (card_type, card_number, card_exp_date) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("sss", $card_type, $card_number, $card_exp_date);

if ($stmt->execute()) {
    $_SESSION['info_saved'] = true;  
    session_write_close();           
    header("Location: ../index.php");
    exit;
    } else {
        echo "Error executing query: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Prepare failed: " . $conn->error;
}

$conn->close();
?>
