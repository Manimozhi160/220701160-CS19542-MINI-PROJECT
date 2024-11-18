<?php
// Start the session to access any session variables if needed
session_start();

// Get the search query from the GET request
$searchQuery = isset($_GET['query']) ? strtolower(trim($_GET['query'])) : '';

// Define the path to your recipes JSON file
$recipesFile = 'recipes.json';

// Load recipes data
$recipes = [];
if (file_exists($recipesFile)) {
    $recipes = json_decode(file_get_contents($recipesFile), true);
}

// Initialize an empty array to store search results
$searchResults = [];

// Perform the search if there is a valid query
if (!empty($searchQuery)) {
    foreach ($recipes as $recipe) {
        // Check if the query is in the recipe title or description
        if (strpos(strtolower($recipe['title']), $searchQuery) !== false || 
            strpos(strtolower($recipe['description']), $searchQuery) !== false) {
            $searchResults[] = $recipe;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results - Pastry Perfection</title>
    <link rel="stylesheet" href="try.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar (optional if you want to include it here) -->
<nav class="navbar navbar-expand-lg" style="background-color:white">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Pastry Perfection</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto text-center">
                <li class="nav-item">
                    <a class="nav-link" href="try.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="favorites.php">Favorites</a>
                </li>
                <!-- Add other nav items as needed -->
            </ul>
        </div>
    </div>
</nav>

<!-- Search Results Section -->
<section class="container my-5">
    <h2 class="text-center">Search Results for "<?php echo htmlspecialchars($searchQuery); ?>"</h2>
    <div class="row mt-4">
        <?php if (empty($searchResults)): ?>
            <p class="text-center">No recipes found matching your search. Try another keyword!</p>
        <?php else: ?>
            <?php foreach ($searchResults as $recipe): ?>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="<?php echo htmlspecialchars($recipe['image']); ?>" class="card-img-top img-fluid" alt="<?php echo htmlspecialchars($recipe['title']); ?>">
                        <div class="card-body" style="background-color:palegoldenrod;">
                            <h5 class="card-title"><?php echo htmlspecialchars($recipe['chocolate tart']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($recipe['description']); ?></p>
                            <a href="<?php echo htmlspecialchars($recipe['chocolate_tart.php']); ?>" class="btn btn-primary">View Recipe</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Pastry Perfection. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
