<?php
include "../session.php";
include "../config.php";
include "header.php";
date_default_timezone_set('Asia/Manila');
?>

<?php if (isset($_SESSION['info_saved']) && $_SESSION['info_saved']): ?>
  <div style="
    background-color: #d4edda;
    color: #155724;
    padding: 15px;
    text-align: center;
    font-weight: bold;
    border: 1px solid #c3e6cb;
    border-radius: 4px;
    margin: 20px auto;
    width: 90%;
    max-width: 600px;
  ">
    Info successfully saved!
  </div>
  <?php unset($_SESSION['info_saved']); ?>
<?php endif; ?>

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
<?php include 'footer.php'; ?>

</html>
