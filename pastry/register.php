<?php
session_start();
require 'connect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user inputs
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Check if the user already exists
    $users = get_users(); // Get existing users from the JSON file

    foreach ($users as $user) {
        if ($user['email'] === $email) {
            echo "<div class='alert alert-danger' role='alert'>Error: Email already registered.</div>";
            exit;
        }
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Add the new user to the array
    $users[] = [
        'email' => $email,
        'password' => $hashed_password
    ];

    // Save users back to the JSON file
    save_users($users);

    echo "<div class='alert alert-success' role='alert'>Registration successful! Redirecting to login page...</div>";
    // Redirect to login page after a delay
    header("refresh:3; url=login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Pastry Perfection</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Register</h2>

            <!-- Registration Form -->
            <form method="POST" action="register.php">
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Create a password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>

            <!-- Redirect to login -->
            <div class="mt-3 text-center">
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
