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
  <title>Add a User</title>
  <link rel="stylesheet" href="../CSS/AdminAddpage.css"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
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

  <div id="Add-form">
    <h1>Add a User</h1>
    <form action="../php/Adminadduser.php" method="POST" enctype="multipart/form-data" onsubmit="return validation()" encyte="multipart/form-data">
      <div class="container">
        <div class="left-side">
          <label for="fname">Firstname:</label>
          <input type="text" name="fname" id="fname" placeholder="User's first name" >

          <label for="lname">Lastname:</label>
          <input type="text" name="lname" id="lname" placeholder="User's last name" >

          <label for="role">Role:</label>
          <select id="role" name="role" required>
            <option value="customer">Customer</option>
            <option value="driver">Driver</option>
            <option value="admin">Admin</option>
            <option value="manager">Manager</option>
          </select>

          <label for="userEmail">Email:</label>
          <input type="email" id="userEmail" name="userEmail" placeholder="Email" >

          <label for="Password">Password:</label>
          <input type="password" id="Password" name="Password" placeholder="Password" required minlength="6">

          <label for="birthday">Birthday:</label>
          <input type="date" id="birthday" name="birthday" >

          <label for="Address">Address:</label>
          <input type="text" id="Address" name="Address" placeholder="Address" >

          <div class="image-preview">
          <label for="upload">Select Photo:</label>
          <input type="file" name="photo" id="upload" accept="image/*" onchange="imagepreview(event);"><img id="preview-img" src="" alt="Image Preview" style="display:none; width:150px; height:150px; margin-top:15px; border-radius:50%; object-fit:cover;">
          </div>
          <button type="submit" name="add-button" id="add-button">Submit</button>
        </div>
        </div>
      </div>
    </form>
  </div>
  <script src="../JS/AdminAddpage.js"></script>
</body>
</html>

