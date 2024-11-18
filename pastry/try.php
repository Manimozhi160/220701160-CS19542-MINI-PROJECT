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
                <li class="nav-item">
                    <i class="fas fa-home"></i>
                    <a class="nav-link active" href="file:///C:/IP/try.html">Home</a>
                </li>
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
                        <li><a class="dropdown-item" href="http://localhost:3000/all.php">All</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <i class="fas fa-star"></i>
                    <a class="nav-link" href="favorites.php">Favorites</a>
                </li>
                <li class="nav-item">
                    <i class="fas fa-info-circle"></i>
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <i class="fas fa-envelope"></i>
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <i class="fas fa-sign-in-alt"></i>
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <i class="fas fa-user-plus"></i>
                    <a class="nav-link" href="signup.php">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<!-- Hero Section with Search Bar -->
<section class="hero text-center text-black d-flex align-items-center">
    <div class="container">
        <h1 style="color: aliceblue; font-style:italic" class="display-4">Life is short, eat your pastry first :)</h1>
        <p style="color: aliceblue;" class="lead">Discover mouthwatering pastry recipes to satisfy your cravings!</p>
        
        <!-- Search Bar -->
        <form action="search.php" method="GET" class="d-flex justify-content-center mt-4">
            <input type="text" name="query" class="form-control me-2" placeholder="Search for a recipe..." style="max-width: 400px; border-radius: 5px;">
            <button type="submit" class="btn btn-primary" style="border-radius: 5px;">Search</button>
        </form>
    </div>
</section>

<!-- Recipes Section -->
<section id="recipes" class="container my-5">
    <h2 class="text-center">Our Popular Recipes</h2>
    <div class="row mt-4">
        <div class="col-sm-6 col-md-4">
            <div class="card">
                <img src="tart.jpg" style="width:354px;height:350px" class="card-img-top img-fluid" alt="Chocolate Tart">
                <div class="card-body" style="background-color:palegoldenrod;">
                    <h5 class="card-title">Chocolate Tart</h5>
                    <p class="card-text">A rich, decadent chocolate tart that melts in your mouth.</p><center>
                    <a href="http://localhost:3000/chocolate_tart.php" class="btn btn-primary">View Recipe</a></center>
                    <form action="add_to_favorites.php" method="POST" class="mt-2">
                        <input type="hidden" name="recipe_id" value="1"> <!-- Replace with dynamic recipe ID -->
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-heart"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-sm-6 col-md-4">
            <div class="card">
                <img src="sants.jpg" style="width:354px;height:350px" class="card-img-top img-fluid" alt="Croissants">
                <div class="card-body" style="background-color:palegoldenrod;">
                    <h5 class="card-title">Croissants</h5>
                    <p class="card-text">Flaky, buttery croissants with a soft, fluffy inside.</p><center>
                    <a href="#" class="btn btn-primary">View Recipe</a></center>
                    <form action="add_to_favorites.php" method="POST" class="mt-2">
                        <input type="hidden" name="recipe_id" value="2"> <!-- Replace with dynamic recipe ID -->
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-heart"></i> 
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="card">
                <img src="samosa.jpg" style="width:354px;height:350px" class="card-img-top img-fluid" alt="Samosa">
                <div class="card-body" style="background-color:palegoldenrod;">
                    <h5 class="card-title">Samosa</h5>
                    <p class="card-text">Delicious Samosas with a variety of vegetable fillings.</p><center>
                    <a href="#" class="btn btn-primary">View Recipe</a></center>
                    <form action="add_to_favorites.php" method="POST" class="mt-2">
                        <input type="hidden" name="recipe_id" value="3"> <!-- Replace with dynamic recipe ID -->
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-heart"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section id="about" class="bg-light py-5" >
    <div class="container text-center" >
        <h2>About Pastry Perfection</h2>
        <p class="lead">Pastry Perfection is your go-to destination for the best pastry recipes. Whether you're a novice or an experienced baker, we have something for everyone.</p>
    </div>
</section>

<!-- Reviews Section -->
<section id="reviews" class="container my-5">
    <h2 class="text-center mb-4" style="font-family: 'Lora', serif; font-size: 2.5rem; color: #444;">Reviews for the Recipe</h2>
    
    <!-- Display error or success message if available -->
    <?php if (!empty($error_message)): ?>
        <div class="alert alert-danger text-center" style="font-size: 1.2rem; max-width: 700px; margin: 0 auto;">
            <?php echo htmlspecialchars($error_message); ?>
        </div>
    <?php elseif (!empty($success_message)): ?>
        <div class="alert alert-success text-center" style="font-size: 1.2rem; max-width: 700px; margin: 0 auto;">
            <?php echo htmlspecialchars($success_message); ?>
        </div>
    <?php endif; ?>

    <!-- Review Form -->
    <form class="row g-4 mt-4" action="submit_review.php" method="POST" style="max-width: 800px; margin: 0 auto; background-color:palegoldenrod; padding: 2rem; border-radius: 15px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
        
        <!-- Name Field -->
        <div class="col-md-6">
            <label for="name" class="form-label" style="font-size: 1.2rem; color: #555;">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required style="border-radius: 5px;">
        </div>

        <!-- Rating Field -->
        <div class="col-md-6">
            <label for="rating" class="form-label" style="font-size: 1.2rem; color: #555;">Rating</label>
            <select class="form-control" id="rating" name="rating" required style="border-radius: 5px;">
                <option value="">Select a Rating</option>
                <option value="5">★★★★★ (5)</option>
                <option value="4">★★★★☆ (4)</option>
                <option value="3">★★★☆☆ (3)</option>
                <option value="2">★★☆☆☆ (2)</option>
                <option value="1">★☆☆☆☆ (1)</option>
            </select>
        </div>

        <!-- Review Textarea -->
        <div class="col-12">
            <label for="review" class="form-label" style="font-size: 1.2rem; color: #555;">Review</label>
            <textarea class="form-control" id="review" name="review" rows="5" placeholder="Write your review here..." required style="border-radius: 5px;"></textarea>
        </div>

        <!-- Submit Button -->
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary" style="padding: 0.75rem 2rem; font-size: 1.2rem; border-radius: 5px;">Submit Review</button>
        </div>
    </form>
</section>

    <div class="mt-5"><center>
        <h3>Recent Reviews</h3></center>
        <?php
        $reviews = get_reviews(); // Implement the get_reviews function in PHP
        if ($reviews):
            foreach ($reviews as $review): ?>
                <div class="card my-3">
                    <div class="card-body" style="background-color:lavender;">
                        <h5 class="card-title"><?php echo htmlspecialchars($review['name']); ?> (Rating: <?php echo $review['rating']; ?>/5)</h5>
                        <p class="card-text"><?php echo htmlspecialchars($review['review']); ?></p>
                    </div>
                </div>
            <?php endforeach;
        else: ?>
            <p>No reviews yet. Be the first to review this recipe!</p>
        <?php endif; ?>
    </div>
</section>

<?php
function get_reviews() {
    $reviews_file = 'reviews.json';
    if (file_exists($reviews_file)) {
        return json_decode(file_get_contents($reviews_file), true);
    }
    return [];
}
?>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Pastry Perfection. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
