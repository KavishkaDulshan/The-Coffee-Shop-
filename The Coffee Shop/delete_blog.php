<?php
$conn = new mysqli("localhost", "root", "", "coffee_shop");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "DELETE FROM blog_posts WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: admin.php');
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>