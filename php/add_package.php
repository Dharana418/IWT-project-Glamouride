<?php
session_start();
require 'connect.php';

if (isset($_POST['add-package'])) {
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $price = floatval($_POST['price']);
    $image = $_FILES['image'];
    $name = "";
    $createdBY = $_SESSION['email']; 
    if ($image['error'] === UPLOAD_ERR_OK) {
        $tmp_name = $image['tmp_name'];
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array(strtolower($ext), $allowed)) {
            $name = uniqid("pkg_", true) . "." . $ext;
            move_uploaded_file($tmp_name, "../uploads/$name");
        } else {
            die("Invalid file type. Only JPG, PNG, GIF allowed.");
        }
    }
    $stmt = $conn->prepare("INSERT INTO packages (title, description, price, image,created_by) VALUES (?, ?, ?, ?,?)");
    $stmt->bind_param("ssdss", $title, $description, $price, $name,$createdBY);

    if ($stmt->execute()) {
        $stmt->close();
        header("Location: ../Html/ManagerDashboard.php?success=1");
        exit();
    } else {
        die("Database insert failed: " . $stmt->error);
    }
}
?>
