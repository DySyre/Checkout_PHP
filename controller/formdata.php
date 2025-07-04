<?php
session_start();
require_once '../config.php';

$first_name = trim($_POST['first_name']);
$last_name  = trim($_POST['last_name']);
$address    = trim($_POST['address']);
$city       = trim($_POST['city']);
$state      = strtoupper(trim($_POST['state']));
$phone      = trim($_POST['phone']);
$email      = trim($_POST['email']);

// (Optional) Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}

// Insert into database
$sql = "INSERT INTO customer_details (first_name, last_name, address, city, state, phone, email)
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("sssssis", $first_name, $last_name, $address, $city, $state, $phone, $email);
    
    if ($stmt->execute()) {
        $_SESSION['customer_id'] = $stmt->insert_id;
        $_SESSION['first_name']  = $first_name;
        $_SESSION['last_name']   = $last_name;
        $_SESSION['address']     = $address;
        $_SESSION['city']        = $city;
        $_SESSION['state']       = $state;
        $_SESSION['phone']       = $phone;
        $_SESSION['email']       = $email;

        // Redirect to payment form
        header("Location: ../view/formstep2.php");
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
