<?php
require_once __DIR__ . '/connection.php';
// register a new user for testing

$userEmail = "user1@gmail.com";
$userPassword = "123";

// register the user

$result = $auth->login($userEmail, $userPassword);

var_dump($result);