<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffee_shop";

$title = $_POST['title'];
$content = $_POST['content'];
$image = $_FILES['image']['name'];
$target = "images/" . basename($image);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO blog_posts (title, content, image) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $title, $content, $target);

if ($stmt->execute()) {
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        header('Location: blog.php');
    } else {
        echo "Error uploading image.";
    }
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>