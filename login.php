<?php
session_start();

// Check if the user is already logged in
if(isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process login form submission
    $username = $_POST['username'];
    $password = $_POST['password'];

    // You can perform authentication here (e.g., check against a database)

    // Save user details in session
    $_SESSION['username'] = $username;

    // Redirect to the welcome page
    header("Location: welcome.php");
    exit;
}
?>