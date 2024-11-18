<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Croissants - Pastry Delight</title>
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
    <h1>Croissants</h1>
    <p>Indulge in the rich, buttery layers of classic French croissants, crisp on the outside and soft on the inside.<br> Perfect for breakfast or a delightful snack!</p>
</section>

<!-- Recipe Steps Section -->
<section class="container my-5">
    <div class="steps-section">
        <!-- Ingredients -->
        <div class="ingredients">
            <h2 class="text-center step-title">Ingredients</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">All-Purpose Flour</li>
                <li class="list-group-item">Granulated Sugar</li>
                <li class="list-group-item">Active Dry Yeast</li>
                <li class="list-group-item">Kosher Salt</li>
                <li class="list-group-item">Milk</li>
                <li class="list-group-item">Butter</li>
            </ul><br>
            <img src="citems.jpg" style="width:60%; height:50%">
        </div>

        <!-- Instructions -->
        <div class="instructions">
            <h2 class="text-center step-title">Instructions</h2>
            
            <!-- Step 1 -->
            <div class="step">
                <h5>Step 1: Make the dough with flour, sugar, yeast, salt, butter, and milk.</h5>
                <p>Start by mixing the flour, sugar, yeast, and salt in a big bowl.</p>
                <img src="c1.jpg" style="width:60%; height:40%"><br><br>
                <img src="c2.jpg" style="width:60%; height:40%"><br><br>
                <img src="c3.jpg"  style="width:60%; height:40%"><br><br>
            </div>

            <!-- Step 2 -->
            <div class="step">
                <h5>Step 2: Chill the dough.</h5>
                <p>After it has chilled, place the dough on a lightly floured surface. Using a rolling pin, start rolling and folding.</p>
                <img src="c4.jpg" style="width:60%; height:60%"><br><br>
            </div>

            <!-- Step 3 -->
            <div class="step">
                <h5>Step 3: Roll and fold the dough 4-6 times.</h5>
                <p>At first the dough will be very lumpy, bumpy, and difficult to work with.<br>But the more you roll and fold, the smoother it will become.</p>
                <p>Once you’ve folded the dough into thirds, turn it 90 degrees, and repeat this process 3 to 5 more times, or until the dough has large streaks of butter in it but it is smooth and flat.</p>
                <img src="c5.jpg" style="width:60%; height:60%"><br><br>

            </div>

            <!-- Step 4 -->
            <div class="step">
                <h5>Step 4: Re-Chill the dough.</h5>
                <p>If at any point the butter starts to feel soft, chill it in the refrigerator or freezer until it becomes stiff again.</p>
                <img src="c6.jpg" style="width:60%; height:60%"><br><br>
            </div>

            <!-- Step 5 -->
            <div class="step">
                <h5>Step 5: Cut the dough into long skinny triangles.</h5>
                <p>With a sharp knife or pizza cutter, trim the uneven edges away and cut the dough into long, skinny triangles.</p>
                <img src="c7.jpg" style="width:60%; height:60%"><br><br>
            </div>

            <!-- step 7 -->
            <div class="step">
                <h5>Step 7: Roll the triangles into a crescent shape.</h5>
                <p>Place the tray in a preheated oven at 180°C (360°F) and bake for 20 minutes,<br>or until the pastry is puffed and golden brown.</p>
                <p>Once baked, carefully transfer the pastries to a serving plate and let them cool slightly.<br>Finally, dust the pastries with powdered sugar before serving.</p>
                <img src="b6.jpg" style="width:60%; height:60%"><br><br>
                <img src="b7.jpg" style="width:60%; height:60%"><br><br>
            </div>

            <!-- step 8 -->
            <div class="step">
                <h5>Step 8: Cover with plastic wrap and let rise.</h5>
                <p>Place the tray in a preheated oven at 180°C (360°F) and bake for 20 minutes,<br>or until the pastry is puffed and golden brown.</p>
                <p>Once baked, carefully transfer the pastries to a serving plate and let them cool slightly.<br>Finally, dust the pastries with powdered sugar before serving.</p>
                <img src="b6.jpg" style="width:60%; height:60%"><br><br>
                <img src="b7.jpg" style="width:60%; height:60%"><br><br>
            </div>

            <!-- step 9 -->
            <div class="step">
                <h5>Step 9: Bake</h5>
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