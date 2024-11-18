<?php
// Define the path to the JSON file
$file_path = 'users.json';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user inputs
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Create user data array
    $user_data = array(
        "username" => $username,
        "email" => $email,
        "password" => password_hash($password, PASSWORD_DEFAULT) // Hashing the password
    );

    // Read existing users from the JSON file
    if (file_exists($file_path)) {
        $json_data = file_get_contents($file_path);
        $users = json_decode($json_data, true); // Decode JSON data to array
    } else {
        $users = array(); // Create an empty array if file doesn't exist
    }

    // Check for duplicate email
    foreach ($users as $user) {
        if ($user['email'] === $email) {
            echo "Error: Email already exists. Please choose another one.";
            exit; // Exit if email exists
        }
    }

    // Add the new user to the users array
    $users[] = $user_data;

    // Save the updated users array to the JSON file
    file_put_contents($file_path, json_encode($users, JSON_PRETTY_PRINT));

    echo "Registration successful! <a href='login.html'>Login here</a>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Pastry Delight</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body" style="background-color:palegoldenrod;">
                    <h3 class="card-title text-center mb-4">Sign Up to Pastry Perfection</h3>
                    <form id="signupForm" action="signup.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <div id="responseMessage" class="mt-3"></div>
                    <div class="text-center mt-3">
                        Already have an account? <a href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

