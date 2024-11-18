<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Favorites - Pastry Perfection</title>
    <link rel="stylesheet" href="try.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: palegoldenrod;
        }

        .navbar {
            background-color: #f8f9fa;
            padding: 1rem;
        }

        .navbar-brand {
            font-weight: bold;
            color: #5a5a5a;
        }

        .nav-link {
            font-size: 1.1rem;
            color: #5a5a5a;
        }

        .nav-link:hover {
            color: #28a745;
        }

        .card {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            background-color: lavender;
            padding: 20px;
        }

        .btn-primary {
            background-color: #28a745;
            border: none;
        }

        .btn-primary:hover {
            background-color: #218838;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        footer {
            background-color: #343a40;
            padding: 20px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pastry Perfection</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="try.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="favorites.php"><i class="fas fa-star"></i> Favorites</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Favorites Section -->
    <section class="container my-5">
        <h2 class="text-center">Your Favorite Recipes</h2>
        <div class="row mt-4">
            <?php
            session_start();
            $favorites_file = 'favorites.json';
            $favorites = [];

            // Load favorites if the file exists
            if (file_exists($favorites_file)) {
                $favorites = json_decode(file_get_contents($favorites_file), true);
            }

            if (empty($favorites)): ?>
                <p class="text-center">You have no favorite recipes yet.</p>
            <?php else:
                foreach ($favorites as $recipe_id):
                    // Example placeholders for recipe data
                    $recipes = [
                        1 => ['title' => 'Chocolate Tart', 'image' => 'tart.jpg', 'description' => 'A rich, decadent chocolate tart that melts in your mouth.'],
                        2 => ['title' => 'Croissants', 'image' => 'sants.jpg', 'description' => 'Flaky, buttery croissants with a soft, fluffy inside.'],
                        3 => ['title' => 'Samosa', 'image' => 'samosa.jpg', 'description' => 'Delicious Samosas with a variety of vegetable fillings.'],
                    ];

                    $recipe = $recipes[$recipe_id] ?? null;

                    if ($recipe): ?>
                        <div class="col-sm-6 col-md-4">
                            <div class="card">
                                <img src="<?php echo $recipe['image']; ?>" class="card-img-top img-fluid" alt="<?php echo $recipe['title']; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $recipe['title']; ?></h5>
                                    <p class="card-text"><?php echo $recipe['description']; ?></p>
                                    <a href="#" class="btn btn-primary">View Recipe</a>
                                    <form action="remove_from_favorites.php" method="POST" class="mt-2">
                                        <input type="hidden" name="recipe_id" value="<?php echo $recipe_id; ?>">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-heart-broken"></i> Remove from Favorites
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endif;
                endforeach;
            endif; ?>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-white text-center py-3">
        <p>&copy; 2024 Pastry Perfection. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
