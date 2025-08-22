<?php
session_start();
require 'connect.php';

if (isset($_POST['add-package'])) {
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $price = floatval($_POST['price']);
    $image = $_FILES['image'];
    $name = "";
    $createdBY = $_SESSION['email'] ?? 'Unknown'; 

    if ($image['error'] === UPLOAD_ERR_OK) {
        $tmp_name = $image['tmp_name'];
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array(strtolower($ext), $allowed)) {
            $name = uniqid("pkg_", true) . "." . $ext;
            move_uploaded_file($tmp_name, "../uploads/$name");
        } else {
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
            Swal.fire({
                icon: "error",
                title: "Invalid File",
                text: "Only JPG, PNG, GIF allowed."
            });
            </script>';
            exit;
        }
    }

    $stmt = $conn->prepare("INSERT INTO packages (title, description, price, image, created_by) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdss", $title, $description, $price, $name, $createdBY);

    if ($stmt->execute()) {
        $stmt->close();
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
        Swal.fire({
            icon: "success",
            title: "Success!",
            text: "Package added successfully!",
            timer: 2000,
            showConfirmButton: false
        }).then(() => {
            window.location.href = "../php/add_package.php";
        });
        </script>';
    } else {
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
        Swal.fire({
            icon: "error",
            title: "Error!",
            text: "Failed to add package."
        });
        </script>';
    }
}
?>
