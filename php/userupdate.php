<?php
include 'connect.php';
$id=$_GET['id'];
if(isset($_POST['update'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];

    $sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', password='$password', birthday='$birthday', Address='$address' WHERE id='$id'";
    
    if(mysqli_query($conn, $sql)){
        echo "Record updated successfully";
        header("Location: display.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="../CSS/userupdate.css"/>
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

    <form method="POST" action="">
        <?php
        $sql = "SELECT * FROM users WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        ?>
        <div class="form">
            <h2>Update User Information</h2>
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" required>

            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" required>

            <label for="password">Password:</label>
            <input type="password" name="password" value="<?php echo $row['password']; ?>" required>

            <label for="birthday">Birthday:</label>
            <input type="date" name="birthday" value="<?php echo $row['birthday']; ?>" required>

            <label for="address">Address:</label>
            <input type="text" name="address" value="<?php echo $row['Address']; ?>" required>
            <script src="../JS/AdminAddpage.js"></script>

            <button type="submit" name="update" onclick="return validation()">Update User</button>
        </div>
        <?php
        } else {
            echo "No user found with this ID.";
        }
        ?>
    </form>    
