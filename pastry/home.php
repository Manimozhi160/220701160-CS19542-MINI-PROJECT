<?php
session_start(); // Start the session to access session variables

// Check if user is logged in
if (!isset($_SESSION['user_email'])) {
    header("Location: login.html"); // Redirect to login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastry Perfection</title>
    <link rel="stylesheet" href="try.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background-color:white">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Pastry Perfection</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto text-center">
                <!-- Home with icon -->
                <li class="nav-item">
                    <i class="fas fa-home"></i>
                    <a class="nav-link active" href="home.php">Home</a>
                </li>

                <!-- Recipes dropdown with icon -->
                <li class="nav-item dropdown">
                    <i class="fas fa-utensils"></i>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Recipes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="beginner.html">Beginner</a></li>
                        <li><a class="dropdown-item" href="intermediate.html">Intermediate</a></li>
                        <li><a class="dropdown-item" href="expert.html">Expert</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="all.html">All</a></li>
                    </ul>
                </li>

                <!-- About Us with icon -->
                <li class="nav-item">
                    <i class="fas fa-info-circle"></i>
                    <a class="nav-link" href="#about">About Us</a>
                </li>

                <!-- Contact with icon -->
                <li class="nav-item">
                    <i class="fas fa-envelope"></i>
                    <a class="nav-link" href="#contact">Contact</a>
                </li>

                <!-- Logout with icon -->
                <li class="nav-item">
                    <i class="fas fa-sign-out-alt"></i>
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero text-center text-black d-flex align-items-center">
    <div class="container">
        <h1 style="color: aliceblue;" class="display-4">Life is short, eat your pastry first :)</h1>
        <p style="color: aliceblue;" class="lead">Discover mouthwatering pastry recipes to satisfy your cravings!</p>
    </div>
</section>

<!-- Recipes Section -->
<section id="recipes" class="container my-5">
    <h2 class="text-center">Our Popular Recipes</h2>
    <div class="row mt-4">
        <div class="col-sm-6 col-md-4">
            <div class="card">
                <img src="tart.jpg" style="width:354px;height:350px" class="card-img-top img-fluid" alt="Chocolate Tart">
                <div class="card-body">
                    <h5 class="card-title">Chocolate Tart</h5>
                    <p class="card-text">A rich, decadent chocolate tart that melts in your mouth.</p>
                    <a href="chocolate_tart.html" class="btn btn-primary">View Recipe</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
                <img src="sants.jpg" style="width:354px;height:350px" class="card-img-top img-fluid" alt="Croissants">
                <div class="card-body">
                    <h5 class="card-title">Croissants</h5>
                    <p class="card-text">Flaky, buttery croissants with a soft, fluffy inside.</p>
                    <a href="#" class="btn btn-primary">View Recipe</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
                <img src="samosa.jpg" style="width:354px;height:350px" class="card-img-top img-fluid" alt="Macarons">
                <div class="card-body">
                    <h5 class="card-title">Samosa</h5>
                    <p class="card-text">Delicious Samosas with a variety of vegetable fillings.</p>
                    <a href="#" class="btn btn-primary">View Recipe</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section id="about" class="bg-light py-5">
    <div class="container text-center">
        <h2>About Pastry Perfection</h2>
        <p class="lead">Pastry Perfection is your go-to destination for the best pastry recipes. Whether you're a novice or an experienced baker, we have something for everyone.</p>
    </div>
</section>

<!-- Contact Section with Get in Touch Form -->
<section id="contact" class="container my-5">
    <h2 class="text-center">Get in Touch</h2>
    <form class="row g-3" action="#" method="POST">
        <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
        </div>
        <div class="col-12">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Pastry Perfection. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script>
    function showContactForm() {
        alert("Contact form will be available soon.");
    }
</script>

</body>
</html>
