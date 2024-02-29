

<?php
require_once './vendor/autoload.php';

use PHPAuth\Config;
use PHPAuth\Auth;



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysite1_db_v2";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    $config = new Config($conn);
    $auth = new Auth($conn, $config);


} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
?>

