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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>GlamourRide</title>
        <link rel="stylesheet" href="../CSS/Customer.css">
</head>
<body>
    <div class="img-slider">
        <div class="imageslider">
            <img src="../images/image1.jpg" alt="image1">
        </div>
    </div>
</body>
</html>