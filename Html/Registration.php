<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registration Page</title>
  <link rel="stylesheet" href="../CSS/Registration.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <div class="registration-form">
    <h2>Register</h2>
<form action="../php/register.php" method="POST" onsubmit="return validation()">
      <label for="firstname">First Name:</label>
      <input type="text" id="firstname" name="firstname" placeholder="Enter your first name"><br>
      <span id="firstnamev"></span><br>
      <label for="lastname">Last Name:</label>
      <input type="text" id="lastname" name="lastname" placeholder="Enter your last name">
      <span id="lastnamev"></span>
      <span id="lastnamev1"></span>

      <label for="role">Role:</label>
     <select id="role" name="role" >
      <option value="none">none</option>
      <option value="customer">Customer</option>
     <option value="admin">Admin</option>
    <option value="manager">Manager</option>
  </select>
  <span id="rolev"></span>
     <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email">
      <span id="emailv"></span>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter a password" autocomplete="new-password">

      <label for="confirmpassword">Confirm Password:</label>
      <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Re-enter the password" autocomplete="new-password" >

      <label for="birthday">Birthday:</label>
      <input type="date" id="birthday" name="birthday" >
      <span id="birthdayv"></span>

      <label for="Address">Address:</label>
      <input type="text" id="Address" name="Address">
      <span id="Addressv"></span>

      <button type="submit" name="register" class="register-btn">Register</button>
    </form>

    <div id="loginlink">
      Already have an account? <a href="./Login.php"><u>Login here</u></a>
    </div>
  </div>
        <script src="../JS/registration.js"></script>

  
</body>
</html>

