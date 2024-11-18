<?php
// connect.php

// Define the path to the JSON file
$file_path = 'users.json';

// Function to read users from the JSON file
function get_users() {
    global $file_path;
    
    if (file_exists($file_path)) {
        $json_data = file_get_contents($file_path);
        return json_decode($json_data, true); // Return decoded array of users
    }
    return []; // Return empty array if the file doesn't exist
}

// Function to save users to the JSON file
function save_users($users) {
    global $file_path;
    
    $json_data = json_encode($users, JSON_PRETTY_PRINT);
    file_put_contents($file_path, $json_data);
}
?>
