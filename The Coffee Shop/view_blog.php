<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Blog Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="fonts.css">
</head>
<body class="roboto-flex-font">
    <?php include 'navbar.php'; ?>
    <div class="header playwrite-in-font">
        <h1>Blog Post</h1>
    </div>
    <div class="container mt-5">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "coffee_shop";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $id = $_GET['id'];
        $sql = "SELECT title, content, image, created_at FROM blog_posts WHERE id=$id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo '<h1 class="mb-4 caveat-font" style="font-size: 3rem;">' . $row["title"] . '</h1>';
            echo '<img src="' . $row["image"] . '" class="img-fluid mb-4 banner-img" alt="' . $row["title"] . '">';
            echo '<p class="caveat-font" style="font-size: 1.5rem;">' . $row["content"] . '</p>';
            echo '<small class="text-muted" style="font-size: 1.2rem;">Posted on ' . $row["created_at"] . '</small>';
        } else {
            echo "<p>Blog post not found.</p>";
        }

        $conn->close();
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>