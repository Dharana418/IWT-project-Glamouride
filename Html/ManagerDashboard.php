<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GlamourRide - Packages</title>
<link rel="stylesheet" href="../CSS/Managerdashboard.css">
<script src="../JS/ManagerDashboard.js"></script>
</head>
<body>

<header>
    <h1>GlamourRide</h1>
    <nav>
        <a href="#">Home</a>
        <a href="#">Packages</a>
        <a href="#">Bookings</a>
        <a href="../Html/Login.php">Logout</a>
    </nav>
</header>

<div class="container">
        <h4>Add a New Package</h4>
        <form action="../php/add_package.php" method="POST" enctype="multipart/form-data">
            <label for="package-name">Package Name:</label><br>
            <input type="text" name="title" placeholder="Package Title" required><br>
            <label for="package-name">Package Description:</label><br>
            <textarea name="description" placeholder="Description" required></textarea><br>
            <label for="package-name">Package Price:</label><br>
            <input type="number" name="price" step="0.01" placeholder="Price" required><br>
            <input type="file" id="image" accept="image/*" onchange="previewImage(event)"><br>
             <img src="" alt="" id="Image Preview">
            <button type="submit" name="add-package">Add Package</button>
        </form>
</div>

</body>
</html>
