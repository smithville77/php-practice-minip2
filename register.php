<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register to log exercises</title>
</head>
<body>
    <h2>Registration</h2>
    <form action="register.php" method="post">
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>


<?php

require_once __DIR__ . '/connection.php';

// $testEmail = "user1@gmail.com";
// $testPassword = "123";

// $result = $auth->register($testEmail, $testPassword, $testPassword);

// var_dump($result);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $auth->register($email, $password, $password);
    var_dump(($result));
}
?>