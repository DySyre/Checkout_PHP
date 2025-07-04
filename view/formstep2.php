<?php
session_start();
include "header.php";
// Save personal details from previous form if POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_SESSION['first_name'] = $_POST['first_name'];
  $_SESSION['last_name']  = $_POST['last_name'];
  $_SESSION['address']    = $_POST['address'];
  $_SESSION['city']       = $_POST['city'];
  $_SESSION['state']      = $_POST['state'];
  $_SESSION['phone']      = $_POST['phone'];
  $_SESSION['email']      = $_POST['email'];
}

?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Step 2 - Payment Info</title>
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
  <h2>Personal Details</h2>
  <ul style="text-align:left; display:inline-block;">
    <li><strong>First Name:</strong> <?= htmlspecialchars($_SESSION['first_name']) ?></li>
    <li><strong>Last Name:</strong> <?= htmlspecialchars($_SESSION['last_name']) ?></li>
    <li><strong>Address:</strong> <?= htmlspecialchars($_SESSION['address']) ?></li>
    <li><strong>City:</strong> <?= htmlspecialchars($_SESSION['city']) ?></li>
    <li><strong>State:</strong> <?= htmlspecialchars($_SESSION['state']) ?></li>
    <li><strong>Phone:</strong> <?= htmlspecialchars($_SESSION['phone']) ?></li>
    <li><strong>Email:</strong> <?= htmlspecialchars($_SESSION['email']) ?></li>
  </ul>
</section>

<section class="login-section">
  <h2>Payment Details</h2>
<form action="../controller/save_payment.php" method="post">
  <select name="card_type" required>
    <option value="1">Visa</option>
    <option value="2">MasterCard</option>
    <option value="3">American Express</option>
    <option value="4">Discover</option>
  </select>
  <input type="text" name="card_number" placeholder="Card Number" required>
  <input type="text" name="card_exp_date" placeholder="Expiration Date (MM/YY)" required>
  <input type="text" name="cvv" placeholder="CVV2" required>
  <input type="submit" value="Submit Payment">
</form>
</section>


</body>
</html>
<?php include 'footer.php'; ?>
