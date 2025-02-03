<?php
$conn = new mysqli("localhost", "root", "", "coffee_shop");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES['image']['name'];
    $target = "images/" . basename($image);

    if ($image) {
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $sql = "UPDATE blog_posts SET title='$title', content='$content', image='$target' WHERE id=$id";
    } else {
        $sql = "UPDATE blog_posts SET title='$title', content='$content' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        header('Location: admin.php');
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM blog_posts WHERE id=$id");
    $row = $result->fetch_assoc();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="fonts.css">

</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Blog Post</h1>
        <form action="edit_blog.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" class="form-control" value="<?php echo $row['title']; ?>" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea id="content" name="content" class="form-control" required><?php echo $row['content']; ?></textarea>
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