<?php
session_start();
require 'connect.php';
if (isset($_POST['register'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $role = $_POST['role'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $birthday = $_POST['birthday'];
    $Address = $_POST['Address'];
    $admin_name='null';
    
     $checkEmail = $conn->query("SELECT email FROM users WHERE email='$email'");
    if ($checkEmail->num_rows > 0) {
        $_SESSION['register_error'] = 'Email is already registered';
        $_SESSION['active_form'] = 'register';
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $conn->query("INSERT INTO users (firstname, lastname, `role`, email, password, birthday, Address,admin_name) 
                      VALUES ('$firstname','$lastname','$role','$email','$hashedPassword','$birthday','$Address','$admin_name')");
    }
}

?>


   
