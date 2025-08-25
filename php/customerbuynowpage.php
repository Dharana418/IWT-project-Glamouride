<?php
include '../php/connect.php';
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: ../Html/Login.php");
    exit();
}

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid package ID.");
}

$sql = "SELECT * FROM packages WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

if (!$product) {
    die("Package not found.");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buy Now</title>
    <link rel="stylesheet" href="../CSS/customerbuynow.css">
</head>
<body>
    <div class="buy-container">
        <h1>Buy Now</h1>
        <form action="../php/process_buy.php" method="POST" class="buy-form">
            <input type="hidden" name="package_id" value="<?php echo htmlspecialchars($product['id']); ?>">

            <div class="product-card">
                <img src="../uploads/<?php echo htmlspecialchars($product['image']); ?>" 
                     alt="<?php echo htmlspecialchars($product['title']); ?>">

                <h2><?php echo htmlspecialchars($product['title']); ?></h2>
                <p class="price">price per 1km: <?php echo number_format($product['price'], 2); ?></p>
                <label>Distance are you expecting to travel:</label>
                <input type="number" id="distance" name="distance" required>
                <p class="total-price">Total Price: <span id="total-price"></span></p>
                <button type="button" id="calculate-btn">Calculate</button>
            </div>

            <button type="submit" class="buy-btn">Submit</button>
        </form>
    </div>
    <script>
        var pricePerKm = <?php echo $product['price']; ?>;
    </script>
    <script src="../JS/customerpricecalculate.js"></script>
</body>
</html>
