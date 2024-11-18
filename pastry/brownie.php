<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutella Brownies- Pastry Delight</title>
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
    <h1>Nutella Brownies</h1>
    <p>Indulge in this rich and creamy Brownies, perfect for any dessert lover!</p>
    <p>These are made with only three ingredients.<br>You’ll fall in love with these fudgy and addicting treats!</p>
</section>

<!-- Recipe Steps Section -->
<section class="container my-5">
    <div class="steps-section">
        <!-- Ingredients -->
        <div class="ingredients">
            <h2 class="text-center step-title">Ingredients</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">400g / 13 oz Nutella</li>
                <li class="list-group-item">200 g / 1 3/4 US sticks (14 tbsp) unsalted butter</li>
                <li class="list-group-item">200 g / 1 1/4 cups / 7 oz dark chocolate melts</li>
                <li class="list-group-item">1 cup (175g) brown sugar</li>
                <li class="list-group-item">3 eggs</li>
                <li class="list-group-item">1 tsp vanilla extract</li>
                <li class="list-group-item">1/2 cup (75g) flour </li>
                <li class="list-group-item">1/4 cup (30g) cocoa powder</li>
                <li class="list-group-item">Pinch of salt</li>
            </ul><br>
            <img src="n8.jpg">
        </div>

        <!-- Instructions -->
        <div class="instructions">
            <h2 class="text-center step-title">Instructions</h2>
            
            <!-- Step 1 -->
            <div class="step">
                <h5>Step 1: Make the batter</h5>
                <p>Preheat your oven to 350 degrees F/180C and line a 9X9 or 8X8 square pan with foil and grease heavily.<br> You can also line the pan with parchment paper.<br>Keep in mind the baking time will alter depending on which size pan you use. The smaller pan will create a thicker brownie.

In a medium pot add the water, butter, sugar, and cocoa powder. Cook over medium heat for 2-3 minutes until it is all combined together, making sure to use a heath proof spatula to mix.</p>
                <img src="n1.jpg" style="width:60%; height:40%"><br><br>
            </div>

            <!-- Step 2 -->
            <div class="step">
                <h5>Step 2: Mix the batter</h5>
                <p>Remove from the heat and mix in 8oz (1 Cup) Nutella, the mixture will be very thick.</p>
                <img src="n2.jpg" style="width:60%; height:60%"><br><br>
            </div>

            <!-- Step 3 -->
            <div class="step">
                <h5>Step 3: Add the extracts and the egg</h5>
                <p>Next you'll add the oil and vanilla extract, this will take a minute or two to mix in, thats fine.</p>
                <p>Just get it mostly combined then let sit for five minutes before adding the eggs. </p>
                <img src="n3.jpg" style="width:60%; height:60%"><br><br>
                <img src="n3.1.jpg" style="width:60%; height:60%"><br><br>
            </div>

            <!-- Step 4 -->
            <div class="step">
                <h5>Step 4: Add the Filling</h5>
                <p>Add the baking powder, salt, cornstarch, and mix to just combine.</p>
                <img src="n4.jpg" style="width:60%; height:60%"><br><br>
            </div>

            <!-- Step 5 -->
            <div class="step">
                <h5>Step 5: Add the flour and mix it well</h5>
                <p>Finally gently add the flour by using a spatula to fold in until just combined, just before there are no flour streaks.<br> Do not over mix, this will affect the end product.</p>
                <img src="n5.jpg" style="width:60%; height:60%"><br><br>
            </div>

            <!-- Step 6 -->
            <div class="step">
                <h5>Step 6: Bake and serve</h5>
                <p>Pour into a prepared pan then dollop the remaining 2oz (¼ cup) Nutella, then use a butter knife to swirl,<br>but don't over swirl you still want thick clumps of Nutella.Bake the Nutella brownies for 25-35 minutes.</p>
                <img src="n6.jpg" style="width:60%; height:60%"><br><br>
                <img src="n7.jpg" style="width:60%; height:60%"><br><br>
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