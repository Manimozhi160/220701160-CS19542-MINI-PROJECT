<?php
session_start(); // Start session to access session variables
session_unset(); // Remove all session variables
session_destroy(); // Destroy the session
header("Location: login.html"); // Redirect to login page
exit();
?>
