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
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GlamourRide</title>
  <link rel="stylesheet" href="../CSS/AdminDashboard.css"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <div class="navbar">
    <ul>
      <li><a href="../Html/AdminAddpage.php"><span class="material-icons">person_add</span>Add a new user</a></li>
      <li><a href="../php/profile.php"><span class="material-icons profile-icon">account_circle</span>Profile</a></li>
      <li><a href="../php/display.php"><span class="material-icons">groups</span>Registered Users</a></li>
      <li><a href="../php/logout.php"><span class="material-icons">logout</span>Log out</a></li>
    </ul>
  </div>
</body>
</html>
