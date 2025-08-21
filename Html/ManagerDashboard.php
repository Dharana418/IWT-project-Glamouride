<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GlamourRide - Packages</title>
<link rel="stylesheet" href="../CSS/Managerdashboard.css">
</head>
<body>

<header>
    <h1>GlamourRide Manager</h1>
    <nav>
        <a href="#">Home</a>
        <a href="#">Packages</a>
        <a href="#">Bookings</a>
        <a href="../Html/Login.php">Logout</a>
    </nav>
</header>

<div class="container">
    <div class="form-box">
        <h2>Add New Package</h2>
        <form action="../php/add_package.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Package Title" required>
            <textarea name="description" placeholder="Description" required></textarea>
            <input type="number" name="price" step="0.01" placeholder="Price" required>
            <input type="file" name="image">
            <button type="submit" name="add-package">Add Package</button>
        </form>
    </div>
</div>

</body>
</html>
