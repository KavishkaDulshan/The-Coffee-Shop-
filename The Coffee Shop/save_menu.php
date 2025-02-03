<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffee_shop";

$menu_item = $_POST['menu_item'];
$price = $_POST['price'];
$description = $_POST['description'];
$image = $_FILES['image']['name'];
$target = "images/" . basename($image);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO menu_items (item_name, price, description, image) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sdss", $menu_item, $price, $description, $target);

if ($stmt->execute()) {
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        header('Location: menu.php');
    } else {
        echo "Error uploading image.";
    }
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>