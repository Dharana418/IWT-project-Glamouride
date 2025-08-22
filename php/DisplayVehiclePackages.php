<?php
session_start();
require 'connect.php';

// Fetch all packages
$sql = "SELECT * FROM packages ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GlamourRide - Packages</title>
<link rel="stylesheet" href="../CSS/Managerdashboard.css">
<style>
    /* Grid styling */
    .packages-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }
    .package-card {
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 15px;
        text-align: center;
        background: #f9f9f9;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .package-card img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 10px;
    }
    .package-card h3 {
        margin: 10px 0 5px;
    }
    .package-card p {
        font-size: 14px;
        color: #555;
    }
    .package-card span {
        font-weight: bold;
        color: #333;
    }
</style>
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
    <h2>Available Packages</h2>
    <div class="packages-grid">
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="package-card">
                    <img src="../uploads/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>">
                    <h3><?php echo htmlspecialchars($row['title']); ?></h3>
                    <p><?php echo htmlspecialchars($row['description']); ?></p>
                    <span>Price: LKR <?php echo number_format($row['price'],2); ?></span>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No packages available.</p>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
