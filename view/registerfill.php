<?php
session_start();
include "../config.php";
include "header.php";
date_default_timezone_set('Asia/Manila');
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
  <h2>Personal Information</h2>
<form action="../controller/formdata.php" method="post">
    <input type="text" name="first_name" placeholder="First Name" required>
    <input type="text" name="last_name" placeholder="Last Name" required>
    <input type="text" name="address" placeholder="Address" required>
    <input type="text" name="city" placeholder="City" required>
    <input type="text" name="state" placeholder="State" maxlength="2" required>
    <input type="text" name="phone" placeholder="Phone" required>
    <input type="text" name="email" placeholder="Email" required>
    <!-- <input type="email" name="email" placeholder="Email" required> -->
    <br>
    <input type="submit" value="Next">
  </form>
</section>





</body>
</html>

<?php include 'footer.php'; ?>

