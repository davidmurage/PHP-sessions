<?php
session_start();

// Check if the user is logged in, otherwise redirect to the login page
if(!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

// Display welcome message
echo "<h1>Welcome, " . $_SESSION['username'] . "!</h1>";

// You can include other content specific to the logged-in user here
?>







