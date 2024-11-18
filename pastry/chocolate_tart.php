<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chocolate Tart Recipe - Pastry Delight</title>
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
    <h1>Chocolate Tart Recipe</h1>
    <p>Indulge in this rich and creamy chocolate tart, perfect for any dessert lover!</p>
    <p>This chic chocolate tart is a dessert to impress, and it’s much easier than it looks.</p>
</section>

<!-- Recipe Steps Section -->
<section class="container my-5">
    <div class="steps-section">
        <!-- Ingredients -->
        <div class="ingredients">
            <h2 class="text-center step-title">Ingredients</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">1 ½ cups all-purpose flour</li>
                <li class="list-group-item">½ cup powdered sugar</li>
                <li class="list-group-item">¼ tsp salt</li>
                <li class="list-group-item">½ cup unsalted butter, cold and cubed</li>
                <li class="list-group-item">1 egg yolk</li>
                <li class="list-group-item">1 tbsp cold water</li>
                <li class="list-group-item">200g dark chocolate</li>
                <li class="list-group-item">¾ cup heavy cream</li>
                <li class="list-group-item">1 tsp vanilla extract</li>
            </ul>
            <img src="items.jpg">
        </div>

        <!-- Instructions -->
        <div class="instructions">
            <h2 class="text-center step-title">Instructions</h2>
            
            <!-- Step 1 -->
            <div class="step">
                <h5>Step 1: Make the Crust</h5>
                <p>In a food processor, pulse together flour, powdered sugar, and salt. Add cold butter cubes and pulse until the mixture resembles coarse crumbs.</p>
                <img src="s1.jpg" style="width:60%; height:60%"><br><br>
                <img src="s1.1.jpg" style="width:60%; height:60%">
            </div>

            <!-- Step 2 -->
            <div class="step">
                <h5>Step 2: Add Egg Yolk</h5>
                <p>Add the egg yolk and cold water to the dough and pulse until the dough comes together. Form into a ball, flatten into a disk, and wrap in plastic. Chill for 30 minutes.</p>
                <img src="s2.jpg" style="width:60%; height:60%"><br><br>
                <img src="s2.1.jpg" style="width:60%; height:60%"><br><br>
                <img src="s2.2.jpg" style="width:60%; height:60%"><br><br><br>
                <img src="s2.3.jpg" style="width:60%; height:60%">
            </div>

            <!-- Step 3 -->
            <div class="step">
                <h5>Step 3: Bake the Crust</h5>
                <p>Preheat the oven to 350°F (175°C). Roll out the chilled dough and press it into a tart pan. Prick the bottom with a fork and bake for 20 minutes until golden. Set aside to cool.</p>
                <img src="s3.jpg" style="width:60%; height:60%"><br><br>
                <img src="s3.1.jpg" style="width:60%; height:60%"><br><br>
                <img src="s3.2.jpg" style="width:60%; height:60%"><br><br><br>
                <img src="s3.3.jpg" style="width:60%; height:60%">
            </div>

            <!-- Step 4 -->
            <div class="step">
                <h5>Step 4: Make the Chocolate Filling</h5>
                <p>In a saucepan, heat the cream until it begins to simmer. Remove from heat, add the chopped chocolate, and stir until smooth. Add vanilla extract and mix well.</p>
                <img src="s4.jpg" style="width:60%; height:60%"><br><br>
                <img src="s4.1.jpg" style="width:60%; height:60%"><br><br>
                <img src="s4.2.jpg" style="width:60%; height:60%"><br><br>
                <img src="s4.3.jpg" style="width:60%; height:60%"><br><br><br>
                <img src="s4.4.jpg" style="width:60%; height:60%">
            </div>

            <!-- Step 5 -->
            <div class="step">
                <h5>Step 5: Assemble the Tart</h5>
                <p>Pour the chocolate filling into the cooled tart shell and smooth the top. Chill in the refrigerator for at least 2 hours to set.</p>
                <img src="s5.jpg" style="width:60%; height:60%"><br><br>
                <img src="s5.1.jpg" style="width:60%; height:60%">
            </div>

            <!-- Step 6 -->
            <div class="step">
                <h5>Step 6: Serve</h5>
                <p>Once set, slice the chocolate tart and serve with fresh berries or a dollop of whipped cream for an extra indulgence!</p>
                <img src="s6.jpg" style="width:60%; height:60%"><br><br>
                <img src="s6.1.jpg" style="width:60%; height:60%"><br><br><br>
                <img src="s6.2.jpg" style="width:60%; height:60%">
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