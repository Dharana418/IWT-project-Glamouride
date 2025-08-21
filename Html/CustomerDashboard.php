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
      <li><a href="../Html/Login.php">Logout</a></li>
    </ul>
  </header>
  