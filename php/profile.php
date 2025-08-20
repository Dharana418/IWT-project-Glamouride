<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: Login.html");
    exit();
}

require 'connect.php';

$email = $_SESSION['email'];

$sql = "SELECT firstname, lastname, email, birthday, address, role FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>User Profile</title>
    <link rel="stylesheet" href="../CSS/profile.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <script src="../JS/profile.js"></script>
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
<div class="details">
    <h1 class="username">
        Welcome, <?php echo htmlspecialchars($user['firstname'] . ' ' . $user['lastname']); ?>!
    </h1>
    <label>Email:</label><?php echo htmlspecialchars($user['email']); ?><br>
    <label>Birthday:</label>
    <?php echo htmlspecialchars($user['birthday']); ?>
    <br>
    <label>Address:</label>
    <?php echo htmlspecialchars($user['address']); ?><br>
    <label>
    Role: 
    </label>
    <?php echo htmlspecialchars($user['role']); ?>
   </div>
