<?php
session_start();

function remove_from_favorites($recipe_id) {
    $favorites_file = 'favorites.json';

    // Check if the favorites file exists
    if (file_exists($favorites_file)) {
        $favorites = json_decode(file_get_contents($favorites_file), true);
        
        // Remove recipe ID from favorites if present
        if (($key = array_search($recipe_id, $favorites)) !== false) {
            unset($favorites[$key]);
            file_put_contents($favorites_file, json_encode(array_values($favorites))); // Re-index array
            $_SESSION['success_message'] = "Recipe removed from favorites.";
        } else {
            $_SESSION['error_message'] = "Recipe not found in favorites.";
        }
    } else {
        $_SESSION['error_message'] = "No favorites to remove.";
    }

    // Redirect back to favorites page
    header('Location: favorites.php');
    exit();
}

// Check if recipe ID is set and remove from favorites
if (isset($_POST['recipe_id'])) {
    remove_from_favorites($_POST['recipe_id']);
} else {
    $_SESSION['error_message'] = "Invalid recipe ID.";
    header('Location: favorites.php');
    exit();
}
?>
