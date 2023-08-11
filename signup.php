<?php
session_start();

// Check if the user is already logged in
if(isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process signup form submission
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Save user details in session (or you can store them in a database)
    $_SESSION['username'] = $username;

    // Redirect to the welcome page
    header("Location: welcome.php");
    exit;
}
?>