<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture user input
    $name = trim($_POST['name']);
    $rating = intval($_POST['rating']);
    $review = trim($_POST['review']);
    
    // Validation
    if (empty($name) || empty($review) || $rating < 1 || $rating > 5) {
        $_SESSION['error_message'] = 'All fields are required and rating must be between 1 and 5.';
        header("Location: try.php#reviews");
        exit();
    }

    // Save review (to a file or database)
    $review_data = [
        'name' => $name,
        'rating' => $rating,
        'review' => $review,
        'date' => date('Y-m-d H:i:s')
    ];

    // Append review to reviews.json (or save in the database)
    $reviews_file = 'reviews.json';
    if (file_exists($reviews_file)) {
        $reviews = json_decode(file_get_contents($reviews_file), true);
    } else {
        $reviews = [];
    }

    $reviews[] = $review_data;
    file_put_contents($reviews_file, json_encode($reviews));

    // Success message
    $_SESSION['success_message'] = 'Review submitted successfully!';
    header("Location: try.php#reviews");
    exit();
}
?>
