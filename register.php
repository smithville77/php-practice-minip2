

<?php

require_once __DIR__ . '/connection.php';

$testEmail = "user1@gmail.com";
$testPassword = "123";

$result = $auth->register($testEmail, $testPassword, $testPassword);

var_dump($result);

// create a form here for username and password registration