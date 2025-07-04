<?php
session_start();
require_once '../config.php';

// Get POST data safely
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$address = trim($_POST['address']);
$city = trim($_POST['city']);
$state = strtoupper(trim($_POST['state'])); // state is CHAR(2)
$phone = trim($_POST['phone']);
$email = trim($_POST['email']);

// Optional: Basic validation (e.g., valid email format)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format");
}

// Prepare SQL
$sql = "INSERT INTO customer_details (first_name, last_name, address, city, state, phone, email)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("sssssis", $first_name, $last_name, $address, $city, $state, $phone, $email);

    if ($stmt->execute()) {
        $_SESSION['customer_id'] = $stmt->insert_id;
        header("Location: formstep2.php"); // Proceed to card details
        exit;
    } else {
        echo "Error executing query: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error preparing statement: " . $conn->error;
}

$conn->close();
?>