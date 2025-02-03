<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
        <h1>Contact Us</h1>
        <p>We'd love to hear from you!</p>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="caveat-font fc">Get in Touch</h2>
                <p class="roboto-flex-font">Have any questions or feedback? Feel free to reach out to us using the form below or visit us at our coffee shop.</p>
                <form>
                    <div class="form-group">
                        <label for="name" class="roboto-flex-font">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="roboto-flex-font">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="message" class="roboto-flex-font">Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2 class="caveat-font fc">Visit Us</h2>
                <p class="roboto-flex-font">123 Coffee Street, Coffee City, CO 12345</p>
                <p class="roboto-flex-font">Phone: +94 71 28XXX14</p>
                <p class="roboto-flex-font">Email: info@coffeeshop.com</p>
                <img src="pics/map.jpeg" class="img-fluid aboutimg" alt="Contact Us">
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>