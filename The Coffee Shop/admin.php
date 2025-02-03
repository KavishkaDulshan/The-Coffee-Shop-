<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="fonts.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="header playwrite-in-font">
        <h1>Admin Panel</h1>
        <p>Manage your content and settings</p>
    </div>
    <div class="container mt-5">
        <div class="list-group mb-4 incl">
            <a href="upload_blog.php" class="list-group-item list-group-item-action caveat-font">Upload Blog Post</a>
            <a href="update_menu.php" class="list-group-item list-group-item-action caveat-font">Update Menu</a>
        </div>

        <h2 class="mb-4 caveat-font">Blog Posts</h2>
        <?php
        $conn = new mysqli("localhost", "root", "", "coffee_shop");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $result = $conn->query("SELECT id, title FROM blog_posts");
        if ($result->num_rows > 0) {
            echo '<ul class="list-group mb-4 incl">';
            while($row = $result->fetch_assoc()) {
                echo "<li class='list-group-item d-flex justify-content-between align-items-center roboto-flex-font'>" . $row["title"] . 
                     " <span><a href='edit_blog.php?id=" . $row["id"] . "' class='btn btn-sm btn-primary'>Edit</a> 
                     <a href='delete_blog.php?id=" . $row["id"] . "' class='btn btn-sm btn-danger'>Delete</a></span></li>";
            }
            echo '</ul>';
        } else {
            echo "<p>No blog posts found.</p>";
        }
        $conn->close();
        ?>

        <h2 class="mb-4 caveat-font">Menu Items</h2>
        <?php
        $conn = new mysqli("localhost", "root", "", "coffee_shop");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $result = $conn->query("SELECT id, item_name FROM menu_items");
        if ($result->num_rows > 0) {
            echo '<ul class="list-group mb-4 incl">';
            while($row = $result->fetch_assoc()) {
                echo "<li class='list-group-item d-flex justify-content-between align-items-center roboto-flex-font'>" . $row["item_name"] . 
                     " <span><a href='edit_menu.php?id=" . $row["id"] . "' class='btn btn-sm btn-primary'>Edit</a> 
                     <a href='delete_menu.php?id=" . $row["id"] . "' class='btn btn-sm btn-danger'>Delete</a></span></li>";
            }
            echo '</ul>';
        } else {
            echo "<p>No menu items found.</p>";
        }
        $conn->close();
        ?>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>