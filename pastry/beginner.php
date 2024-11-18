<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beginner Recipes - Pastry Delight</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border: none;
        }
        .card:hover {
            transform: scale(1.03);
            transition: 0.3s ease;
        }
        .hero {
            background-color: white;
            padding: 2rem;
            text-align: center;
        }
        .hero h1 {
            font-size: 2.5rem;
            color: #333;
        }
        .hero p {
            font-size: 1.2rem;
            color: #555;
        }
        /* About Section */
        #about {
            background-color: white;
            padding: 3rem 0;
        }
        #about h2 {
            font-size: 2rem;
        }
        #about p {
            font-size: 1.1rem;
            color: #666;
        }
        /* Contact Section */
        #contact {
            background-color: white;
            padding: 3rem 0;
        }
        #contact-form input, #contact-form textarea {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background-color: white">
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
                    <a class="nav-link active" href="file:///C:/IP/try.html">Home</a>
                </li>

                <!-- Recipes dropdown with icon -->
                <li class="nav-item dropdown">
                    <i class="fas fa-utensils"></i>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Recipes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="http://localhost:3000/beginner.php">Beginner</a></li>
                        <li><a class="dropdown-item" href="http://localhost:3000/intermediate.php">Intermediate</a></li>
                        <li><a class="dropdown-item" href="http://localhost:3000/expert.php">Expert</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="file:///C:/IP/all.html">All</a></li>
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

                <!-- Login with icon -->
                <li class="nav-item">
                    <i class="fas fa-sign-in-alt"></i>
                    <a class="nav-link" href="login.html">Login</a>
                </li>

                <!-- Sign Up with icon -->
                <li class="nav-item">
                    <i class="fas fa-user-plus"></i>
                    <a class="nav-link" href="signup.html">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

        
    </div>
</nav>

            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <h1>Beginner Recipes</h1>
    <p>Start your baking journey with these easy and delicious recipes!</p>
</section>

<!-- Recipe Cards Section -->
<section class="container my-5">
    <div class="row text-center">
        <div class="col-sm-6 col-md-4">
            <div class="card">
                <img src="brownie.jpg" style="height:420px"     class="card-img-top img-fluid" alt="Chocolate Chip Cookies">
                <div class="card-body">
                    <h5 class="card-title">Nutella Brownies</h5>
                    <p class="card-text">These are made with only three ingredients. You’ll fall in love with these fudgy and addicting treats!</p>
                    <a href="http://localhost:3000/brownie.php" class="btn btn-primary">View Recipe</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
                <img src="banana.jpg" class="card-img-top img-fluid" alt="Banana Bread">
                <div class="card-body">
                    <h5 class="card-title">Banana and Chocolate puff pastry</h5>
                    <p class="card-text">A moist, fluffy, and delicious banana and chocolate puff that's perfect for beginners.</p>
                    <a href="http://localhost:3000/banana.php" class="btn btn-primary">View Recipe</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
                <img src="apple.jpg" style="width: 450px;height:420px" class="card-img-top img-fluid" alt="Pancakes">
                <div class="card-body">
                    <h5 class="card-title">Apple turnovers</h5>
                    <p class="card-text">This recipe for easy apple pastry yields the most delicious mouth-watering apple turnovers.</p>
                    <a href="http://localhost:3000/apple.php" class="btn btn-primary">View Recipe</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section id="about">
    <div class="container text-center">
        <h2>About Us</h2>
        <p>Pastry Delight is a haven for pastry lovers of all skill levels. Whether you’re just starting out or you’re an experienced baker, we have the perfect recipe for you. Our passion is to make baking approachable and fun for everyone. Join our community and explore the art of baking with delicious, step-by-step recipes designed for success.</p>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <h2 class="text-center mb-4">Get in Touch</h2>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form id="contact-form">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Your Message" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Pastry Delight. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
