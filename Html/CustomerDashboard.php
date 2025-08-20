<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("Location: ../Html/Login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>GlamourRide</title>
  <link rel="stylesheet" href="../CSS/UserDashboard.css" />
</head>
<body>
  <header class="header">
    <div class="site-logo">
      <img src="../images/logo.webp" alt="GlamourRide Logo">
    </div>
    <h1>GlamourRide</h1>
    <ul class="horizontal-list">
      <li>Home</li>
      <li>Bookings</li>
      <li>My Bookings</li>
      <li>Profile</li>
      <li a href="../php/logout.php">Logout</li>
    </ul>
  </header>
  <footer class="footer">
    <div class="footer-container">
      <div class="contact-us">
        <h2><u>Contact Support</u></h2>
        <div class="contact-item">
          <img src="../images/phone.png" alt="Phone Icon" class="contact-icon">
          <p>+94-774249003</p>
        </div>
        <div class="contact-item">
          <img src="../images/email.png" alt="Email Icon" class="contact-icon">
          <p>support@glamourride.com</p>
        </div>
        <div class="contact-item">
          <img src="../images/location.png" alt="Location Icon" class="contact-icon">
          <p>GlamourRide Gateway, WTC, Colombo, Sri Lanka</p>
        </div>
      </div>
      <div class="logo-section">
        <img src="../images/logo.webp" alt="GlamourRide Logo" height="100">
        <div class="A">
          <p>&copy; 2024 GlamourRide, Inc. All Rights Reserved</p>
        </div>
      </div>
      <div class="logo-description">
        <p><strong>GlamourRide</strong> is a cutting-edge platform designed to revolutionize the car rental experience. Whether you're seeking a luxurious ride for a special occasion, a reliable vehicle for your daily commute, or an adventurous SUV for your next getaway, GlamourRide offers the perfect car to meet your needs.</p>
        <form>
          <input type="email" id="Email" name="Email" placeholder="Enter your email">
          <button type="submit" class="subscribe-button">Subscribe</button>
        </form>
        <nav class="navigation-bar">
          <ul>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Privacy & Cookies Policy</a></li>
            <li><a href="#">FAQs</a></li>
          </ul>
        </nav>
        <div class="social-icons">
          <a href="#"><img src="../images/facebook_1384021.png" alt="Facebook" class="social-icon"></a>
          <a href="#"><img src="../images/linkedin_2582545.png" alt="LinkedIn" class="social-icon"></a>
          <a href="#"><img src="../images/social_49084.png" alt="YouTube" class="social-icon"></a>
          <a href="#"><img src="../images/instagram_3670274.png" alt="Instagram" class="social-icon"></a>
        </div>
        <p class="footer-endline">Usage Terms | Privacy Agreement | Cookie Policy | COPPA Adherence</p>
      </div>
    </div>
  </footer>
</body>
</html>

