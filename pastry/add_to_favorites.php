<?php
session_start();

function add_to_favorites($recipe_id) {
    $favorites_file = 'favorites.json';

    // Check if the favorites file exists
    if (file_exists($favorites_file)) {
        $favorites = json_decode(file_get_contents($favorites_file), true);
    } else {
        $favorites = [];
    }

    // Add recipe ID to favorites if not already present
    if (!in_array($recipe_id, $favorites)) {
        $favorites[] = $recipe_id;
        file_put_contents($favorites_file, json_encode($favorites));
        $_SESSION['success_message'] = "Recipe added to favorites!";
    } else {
        $_SESSION['error_message'] = "Recipe is already in favorites.";
    }

    // Redirect back to the home page
    header('Location: try.php');
    exit();
}

// Check if recipe ID is set and add to favorites
if (isset($_POST['recipe_id'])) {
    add_to_favorites($_POST['recipe_id']);
} else {
    $_SESSION['error_message'] = "Invalid recipe ID.";
    header('Location: try.php');
    exit();
}
?>
