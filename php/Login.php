<?php
require 'connect.php';
session_start();

if (isset($_POST['login-button'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password']; 
    $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            if (strtolower($user['role']) === 'admin') {
                $_SESSION['email']=$email;
                header("Location: ../Html/AdminAddpage.php");
                exit();
            } else {
                echo "You are not authorized to access the admin dashboard.";
            }
            if (strtolower($user['role']) === 'customer') {
                $_SESSION['email']=$email;
                header("Location: ../php/customerdisplaydetails.php");
                exit();
            } else {
                echo "You are not authorized to access the customer dashboard.";
            }
             if (strtolower($user['role']) === 'manager') {
                $_SESSION['email']=$email;
                header("Location: ../Html/ManagerDashboard.php");
                exit();
            } else {
                echo "You are not authorized to access the manager dashboard.";
            }
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No account found with that email.";
    }
}
?>

