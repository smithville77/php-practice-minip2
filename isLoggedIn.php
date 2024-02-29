
<?php 
require_once './connection.php';
// check the user login status

if ($auth->isLogged()) {
    echo "User is logged in <br />";
    $currentUser = $auth->getCurrentUser();
    var_dump($currentUser);
} else {
    echo "User is not logged in <br />";
}