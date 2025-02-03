<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
        <h1>About Us</h1>
        <p>Discover our story and values</p>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="caveat-font fc">Our Journey</h2>
                <p class="roboto-flex-font">Founded in 2010, our coffee shop has been dedicated to providing the finest coffee experience. From sourcing the best beans to mastering the art of brewing, we are passionate about every cup we serve.</p>
            </div>
            <div class="col-md-6">
                <img src="pics/shop.webp" class="img-fluid aboutimg" alt="About Us">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="pics/team.jpeg" class="img-fluid aboutimg" alt="Our Team">
            </div>
            <div class="col-md-6">
                <h2 class="caveat-font fc">Our Team</h2>
                <p class="roboto-flex-font">Our team of skilled baristas and coffee enthusiasts are dedicated to making your coffee experience exceptional. We believe in continuous learning and improvement to bring you the best flavors and techniques.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="caveat-font text-center fc">Our Values</h2>
                <p class="roboto-flex-font text-center">We are committed to sustainability, quality, and community. Our coffee is ethically sourced, and we strive to minimize our environmental impact. We believe in giving back to the community and creating a welcoming space for everyone.</p>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>