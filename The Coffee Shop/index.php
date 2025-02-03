<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop - Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="fonts.css">
</head>
<body class="roboto-flex-font ">
    <?php include 'navbar.php'; ?>
    <div class="header playwrite-in-font">
        <h1>Welcome to Our Coffee Shop</h1>
        <p>Enjoy the best coffee in town!</p>
        <a href="menu.php" class="btn btn-custom">Explore Our Menu</a>
    </div>
    <div class="container " id="services">
        <h1 class="caveat-font">Our Services</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card1">
                    <img src="pics/1.png" class="card-img-top" alt="Global Coffee Selection">
                    <div class="card-body">
                        <h5 class="card-title caveat-font">Global Coffee Selection</h5>
                        <p class="card-text">Explore a world of flavors with our handpicked coffees from the finest regions—Ethiopia, Colombia, Brazil, and beyond. Every cup tells a story.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card1">
                    <img src="pics/2.webp" class="card-img-top" alt="Brewing Mastery">
                    <div class="card-body">
                        <h5 class="card-title caveat-font">Brewing Mastery</h5>
                        <p class="card-text">Experience coffee like never before with our expert brewing methods—French Press, Pour-Over, AeroPress, and more. Perfectly crafted, just for you.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card1">
                    <img src="pics/3.png" class="card-img-top" alt="Coffee Tasting Events">
                    <div class="card-body">
                        <h5 class="card-title caveat-font">Coffee Tasting Events</h5>
                        <p class="card-text">Join our monthly tasting sessions and discover the nuances of different beans, roasts, and brewing techniques. Perfect for coffee enthusiasts!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card1">
                    <img src="pics/4.png" class="card-img-top" alt="Custom Blends">
                    <div class="card-body">
                        <h5 class="card-title caveat-font">Custom Blends</h5>
                        <p class="card-text">Create your own signature blend! Our baristas will guide you in crafting a coffee that’s uniquely yours.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card1">
                    <img src="pics/5.png" class="card-img-top" alt="Barista Training">
                    <div class="card-body">
                        <h5 class="card-title caveat-font">Barista Training</h5>
                        <p class="card-text">Learn the art of coffee-making with our professional barista workshops. From latte art to espresso mastery, we’ve got you covered.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card1">
                    <img src="pics/6.png" class="card-img-top" alt="Coffee Subscriptions">
                    <div class="card-body">
                        <h5 class="card-title caveat-font">Coffee Subscriptions</h5>
                        <p class="card-text">Never run out of your favorite brew! Sign up for our subscription service and get freshly roasted coffee delivered to your door every month.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card1">
                    <img src="pics/7.png" class="card-img-top" alt="Cozy Café Experience">
                    <div class="card-body">
                        <h5 class="card-title caveat-font">Cozy Café Experience</h5>
                        <p class="card-text">Relax in our warm, inviting space designed for coffee lovers. Whether you’re working or catching up with friends, we’ve got the perfect spot for you.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card1">
                    <img src="pics/8.png" class="card-img-top" alt="Eco-Friendly Practices">
                    <div class="card-body">
                        <h5 class="card-title caveat-font">Eco-Friendly Practices</h5>
                        <p class="card-text">We’re committed to sustainability. Enjoy your coffee knowing it’s sourced ethically and served in eco-friendly packaging.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>