<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
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
        <h1>Our Blog</h1>
        <p>Stay updated with our latest news and articles</p>
    </div>
    <div class="container mt-5">
        <div class="row">
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

            $sql = "SELECT id, title, content, image, created_at FROM blog_posts ORDER BY created_at DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card h-100">';
                    echo '<img src="' . $row["image"] . '" class="card-img-top" alt="' . $row["title"] . '">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title caveat-font blogfc">' . $row["title"] . '</h5>';
                    echo '<p class="card-text roboto-flex-font">' . substr($row["content"], 0, 100) . '...</p>';
                    echo '<a href="view_blog.php?id=' . $row["id"] . '" class="btn btn-custom">Read More</a>';
                    echo '</div>';
                    echo '<div class="card-footer">';
                    echo '<small class="text-muted">Posted on ' . $row["created_at"] . '</small>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<p>No blog posts found.</p>";
            }

            $conn->close();
            ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>