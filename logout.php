<?php

require_once './connection.php';


// user needs to be logged in before running this page script to get a true result;

$currentSessionHash = $auth->getCurrentSessionHash();

$result = $auth->logout($currentSessionHash);

var_dump($result);

echo ($result == true) ?  '<h2>Successfully logged out</h2>' : '<h2>No user currently logged in</h2>';
