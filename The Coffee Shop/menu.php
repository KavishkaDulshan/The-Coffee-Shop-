<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
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
        <h1>Our Menu</h1>
        <p>Explore our delicious offerings</p>
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

            $sql = "SELECT item_name, price, description, image FROM menu_items ORDER BY created_at DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card1 h-100">';
                    echo '<img src="' . $row["image"] . '" class="card-img-top" alt="' . $row["item_name"] . '">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title caveat-font">' . $row["item_name"] . '</h5>';
                    echo '<p class="card-text roboto-flex-font">' . $row["description"] . '</p>';
                    echo '<p class="card-text roboto-flex-font"><strong>Price: $' . $row["price"] . '</strong></p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<p>No menu items found.</p>";
            }

            $conn->close();
            ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>