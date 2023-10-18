<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Vanilla Restaurant</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- <a class="navbar-brand" href="#">Vanilla Restaurant</a> -->
        <img src="img/logo.png" alt="" style="width: 15rem;" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- About Us Section -->
<section id="about" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="display-4">About Vanilla</h2>
                <p>Welcome to Vanilla, where flavors meet delight. Our restaurant is dedicated to serving you the finest
                    dishes made from the freshest ingredients. We believe in creating not just meals, but memories.
                    From our chefs' passion for food to our warm and inviting ambiance, we offer an experience that
                    you'll cherish.</p>
                <p>At Vanilla, we celebrate diversity in flavors and cultures. Our menu is a fusion of culinary
                    traditions from around the world. Whether you're a fan of Italian pasta, Indian curries, or
                    American classics, you'll find something that satisfies your palate here.</p>
                <p>We take pride in our commitment to sustainability. We source our ingredients locally whenever
                    possible, reducing our carbon footprint and supporting local farmers. It's our way of giving back
                    to the community that has supported us.</p>
            </div>
            <div class="col-lg-6">
                <img src="img/gallery07.jpg" alt="Restaurant Interior" class="img-fluid rounded-circle">
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="bg-dark text-light py-3">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                &copy; 2023 Vanilla Restaurant. All rights reserved.
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
