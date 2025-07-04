<?php
include "../session.php";
include "../config.php";
date_default_timezone_set('Asia/Manila');
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<link rel="stylesheet" href="../style.css">
<?php include "pageheader.php" ?>
<body>
<main class="main" id="top"></main>
  <header>
    <div class="logo">Alexander Inciong</div>
    <nav>
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Contact</a>
    </nav>
  </header>

  <section class="hero">
    <h1>Welcome to Our Garage Services</h1>
  </section>

<section class="login-section">
  <h2>Welcome</h2>
  <p>Please choose an option:</p>
  <div class="login-buttons">
    <a href="registerfill.php" class="btn">Create Account</a>
    <a href="loginfill.php" class="btn">Login Existing</a>
  </div>
</section>
    <!-- End of Main Content -->
</body>
<!-- <footer>
    <div class="footer-content">
    <div class="footer-left">
        &copy; 2025 Mass Garage Doors Expert
    </div>
    <div class="footer-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms</a>
        <a href="#">Contact</a>
    </div>
    </div>
</footer> -->

</html>