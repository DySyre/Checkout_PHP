<?php
session_start();
include "header.php";
$_SESSION['card_type'] = $_POST['card_type'];
$_SESSION['card_number'] = $_POST['card_number'];
$_SESSION['expiry'] = $_POST['expiry'];
$_SESSION['cvv'] = $_POST['cvv'];
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
<header>
  <div class="logo">Alexander Inciong</div>
  <nav>
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Contact</a>
  </nav>
</header>

<section class="login-section">
  <h2>Here is your saved details</h2>
  <ul style="text-align:left; display:inline-block;">
    <li><strong>First Name:</strong> <?= $_SESSION['first_name'] ?></li>
    <li><strong>Last Name:</strong> <?= $_SESSION['last_name'] ?></li>
    <li><strong>Address:</strong> <?= $_SESSION['address'] ?></li>
    <li><strong>City:</strong> <?= $_SESSION['city'] ?></li>
    <li><strong>State:</strong> <?= $_SESSION['state'] ?></li>
    <li><strong>Phone:</strong> <?= $_SESSION['phone'] ?></li>
    <li><strong>Email:</strong> <?= $_SESSION['email'] ?></li>
    <li><strong>Card Type:</strong> <?= $_SESSION['card_type'] ?></li>
    <li><strong>Card Number:</strong> <?= $_SESSION['card_number'] ?></li>
    <li><strong>Expiration:</strong> <?= $_SESSION['expiry'] ?></li>
    <li><strong>CVV:</strong> <?= $_SESSION['cvv'] ?></li>
  </ul>

  <br><br>
  <a href="../index.php" class="btn btn-warning">← Go Back to Home</a>
</section>

</body>
</html>
<?php include 'footer.php'; ?>