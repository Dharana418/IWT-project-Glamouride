<?php
// displapackages.php
include '../php/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>GlamourRide</title>
  <link rel="stylesheet" href="../CSS/displapackages.css" />
</head>
<body>
<header class="header">
    <div class="site-logo">
      <img src="../images/logo.webp" alt="GlamourRide Logo">
    </div>
    <h1>GlamourRide</h1>
    <ul class="horizontal-list">
      <li><a href="../php/displapackages.php">Bookings</a></li>
      <li><a href="../">Profile</a></li>
      <li><a href="../Html/Login.php">Logout</a></li>
    </ul>
</header>

<table class="content-table">
  <thead>
    <tr>
      <th>ID</th>
      <th><u>Package Name</u></th>
      <th><u>Package Description</u></th>
      <th><u>Package Price</u></th>
      <th><u>Image</u></th>
      <th><u>Actions</u></th>
    </tr>
  </thead>
  <tbody>
<?php
$sql = "SELECT * FROM packages";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){

        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['title']."</td>";
        echo "<td>".$row['description']."</td>";
        echo "<td>".$row['price']."</td>";

        if (!empty($row['image'])) {
    echo "<td><img src='../uploads/".$row['image']."' class='package-image' width='100'></td>";
} else {
    echo "<td><span style='color:red;'>No image</span></td>";
}

        echo "<td>
                <a href='edit_package.php?id=".$row['id']."'>Edit</a> | 
                <a href='delete_package.php?id=".$row['id']."' onclick=\"return confirm('Are you sure you want to delete this package?');\">Delete</a>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6' class='no-packages'>No packages found</td></tr>";
}
?>
  </tbody>
</table>

</body>
</html>
