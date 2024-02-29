
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="login.php">
    <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>


<?php
require_once __DIR__ . '/connection.php';
// register a new user for testing

// $userEmail = "user1@gmail.com";
// $userPassword = "123";

// // register the user

// $result = $auth->login($userEmail, $userPassword);

// var_dump($result);


require_once __DIR__ . '/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and password are set
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $userEmail = $_POST["email"];
        $userPassword = $_POST["password"];

        $result = $auth->login($userEmail, $userPassword);

        if ($result) {
            // Successful login
            header("Location: profile.php");
            exit;
        } else {
            // Invalid username or password
            echo "Invalid username or password.";
        }
    }
}