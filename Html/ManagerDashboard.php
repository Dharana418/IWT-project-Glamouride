<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GlamourRide - Packages</title>
<style>
body {
    font-family: Arial, sans-serif;
    background: #f4f4f4;
    margin: 0;
    padding: 0;
}
header {
    background: #252525;
    color: #fff;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
header h1 { margin:0; font-size: 1.8rem; }
nav a { color:#fff; text-decoration:none; margin-left:15px; }
nav a:hover { color:#f1c40f; }

.container { 
    max-width: 900px; 
    margin: 30px auto; 
    padding: 20px; 
}

/* Form box */
.form-box {
    background: #fff; 
    padding: 25px; 
    border-radius: 10px; 
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}
.form-box h2 { margin-bottom: 20px; color: #252525; }

form input, form textarea, form button {
    width: 100%; 
    padding: 10px; 
    margin-bottom: 12px; 
    border-radius: 5px; 
    border: 1px solid #ccc;
}
form button {
    background: #4a90e2; 
    color:#fff; 
    border:none; 
    cursor:pointer;
}
form button:hover { background: #357ab8; }

/* Responsive */
@media(max-width:768px){
    header { flex-direction: column; align-items: flex-start; }
    nav a { margin: 5px 0 0 0; }
}
</style>
</head>
<body>

<header>
    <h1>GlamourRide Manager</h1>
    <nav>
        <a href="#">Home</a>
        <a href="#">Packages</a>
        <a href="#">Bookings</a>
        <a href="#">Logout</a>
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
