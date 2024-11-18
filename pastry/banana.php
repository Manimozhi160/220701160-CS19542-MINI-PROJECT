<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banana puff Pastry Delight</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: palegoldenrod
        }
        .hero {
            background-color: bg-light brown;
            padding: 3rem;
            text-align: center;
            font-style: italic;
        }
        .hero h1 {
            font-size: 2.5rem;
            color: #333;
            font-style: #555 ;
        }
        .hero p {
            font-size: 1.2rem;
            color: #555;
        }
        .steps-section {
            background-color: #2F4F4F;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .step-title {
            font-size: 1.5rem;
            color: white;
        }
        .step {
            padding: 1rem;
            border-bottom: 1px solid white;
            color:white;

        }
        .step:last-child {
            border-bottom: none;
            color:white;
        }
        .ingredients, .instructions {
            margin-bottom: 2rem;
        }
        .instructions p {
            margin-bottom: 1rem;
        }
        .card {
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
                        <li><a class="dropdown-item" href="http://localhost:3000/all.php">All</a></li>
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

<!-- Hero Section -->
<section class="hero">
    <h1>Chocolate And Banana Puff Pastries</h1>
    <p>Indulge in the perfect balance of rich chocolate and sweet banana, wrapped in golden, flaky puff pastry</p>
    <p>This quick and easy recipe will satisfy your sweet cravings in no time!</p>
</section>

<!-- Recipe Steps Section -->
<section class="container my-5">
    <div class="steps-section">
        <!-- Ingredients -->
        <div class="ingredients">
            <h2 class="text-center step-title">Ingredients</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">1 ROLL OF PUFF PASTRY</li>
                <li class="list-group-item">Chocolate 100g (3.5 oz)</li>
                <li class="list-group-item">1/2 banana</li>
                <li class="list-group-item">1 cup (175g) brown sugar</li>
                <li class="list-group-item">Egg for egg wash</li>
                <li class="list-group-item">Powdered sugar</li>
            </ul><br>
            <img src="bitems.jpg" style="width:60%; height:50%">
        </div>

        <!-- Instructions -->
        <div class="instructions">
            <h2 class="text-center step-title">Instructions</h2>
            
            <!-- Step 1 -->
            <div class="step">
                <h5>Step 1: Prepare the batter</h5>
                <p>Gently unfold the puff pastry sheet onto a lightly floured cutting board.<br> Using a sharp knife, cut the puff pastry into squares or rectangles, depending on the desired pastry size.</p>
                <img src="b1.jpg" style="width:60%; height:40%"><br><br>
            </div>

            <!-- Step 2 -->
            <div class="step">
                <h5>Step 2: Add chocolate and Banana</h5>
                <p>Carefully transfer the squares to a baking sheet lined with parchment paper, leaving a little space between each pastry for even puffing.<br> Add a piece of chocolate and two banana slices to each pastry square.</p>
                <img src="b2.jpg" style="width:60%; height:60%"><br><br>
            </div>

            <!-- Step 3 -->
            <div class="step">
                <h5>Step 3: Cut short slits into the pastry</h5>
                <p>Using a knife, cut short slits into the pastry side that will be folded over the banana and chocolate pieces. </p>
                <img src="b3.jpg" style="width:60%; height:60%"><br><br>
            </div>

            <!-- Step 4 -->
            <div class="step">
                <h5>Step 4: Fold the pastry half open </h5>
                <p>Fold the open half of the pastry over the banana and chocolate pieces, and using a fork, gently crimp the edges of the dough.</p>
                <img src="b4.jpg" style="width:60%; height:60%"><br><br>
            </div>

            <!-- Step 5 -->
            <div class="step">
                <h5>Step 5: Egg wash the pastry</h5>
                <p>In a small bowl, whisk an egg with a splash of water to create an egg wash.<br> Brush the tops of the pastries with the egg wash.</p>
                <img src="b5.jpg" style="width:60%; height:60%"><br><br>
            </div>

            <!-- Step 6 -->
            <div class="step">
                <h5>Step 6: Bake and serve</h5>
                <p>Place the tray in a preheated oven at 180°C (360°F) and bake for 20 minutes,<br>or until the pastry is puffed and golden brown.</p>
                <p>Once baked, carefully transfer the pastries to a serving plate and let them cool slightly.<br>Finally, dust the pastries with powdered sugar before serving.</p>
                <img src="b6.jpg" style="width:60%; height:60%"><br><br>
                <img src="b7.jpg" style="width:60%; height:60%"><br><br>
            </div>
        </div>
    </div>
</section>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!-- About Us Section -->
<section id="about">
    <div class="container text-center">
        <h2>About Us</h2>
        <p>Pastry perfection is a haven for pastry lovers of all skill levels. Whether you’re just starting out or you’re an experienced baker, we have the perfect recipe for you. Our passion is to make baking approachable and fun for everyone. Join our community and explore the art of baking with delicious, step-by-step recipes designed for success.</p>
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
    <form class="row g-4 mt-4" action="submit_review.php" method="POST" style="max-width: 800px; margin: 0 auto; background-color: #f7f7f7; padding: 2rem; border-radius: 15px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
        
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

    <div class="mt-5">
        <h3>Recent Reviews</h3>
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