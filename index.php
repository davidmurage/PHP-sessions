<?php
session_start();

// Check if the user is already logged in
if(isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup/Login Example</title>
</head>
<body>
    <h1>Signup/Login Example</h1>

    <h2>Signup</h2>
    <form action="signup.php" method="POST">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Signup</button>
    </form>

    <h2>Login</h2>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>