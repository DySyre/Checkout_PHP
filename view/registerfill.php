<?php
session_start();
include "../config.php";
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
<form action="formdata.php" method="post">
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

<!-- Uncomment footer if needed -->
<!--
<footer>
  <div class="footer-content">
    <div class="footer-left">&copy; 2025 Mass Garage Doors Expert</div>
    <div class="footer-links">
      <a href="#">Privacy Policy</a>
      <a href="#">Terms</a>
      <a href="#">Contact</a>
    </div>
  </div>
</footer>
-->

</body>
</html>
