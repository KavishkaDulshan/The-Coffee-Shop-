<?php
$conn = new mysqli("localhost", "root", "", "coffee_shop");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $item_name = $_POST['item_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $target = "images/" . basename($image);

    if ($image) {
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $sql = "UPDATE menu_items SET item_name='$item_name', price='$price', description='$description', image='$target' WHERE id=$id";
    } else {
        $sql = "UPDATE menu_items SET item_name='$item_name', price='$price', description='$description' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        header('Location: admin.php');
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM menu_items WHERE id=$id");
    $row = $result->fetch_assoc();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu Item</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="fonts.css">

</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Menu Item</h1>
        <form action="edit_menu.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="item_name">Menu Item:</label>
                <input type="text" id="item_name" name="item_name" class="form-control" value="<?php echo $row['item_name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" class="form-control" value="<?php echo $row['price']; ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" class="form-control" required><?php echo $row['description']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>