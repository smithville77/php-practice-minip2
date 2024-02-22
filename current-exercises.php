<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysite1_db_practice";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
  }
  

  $stmt = $conn->prepare("SELECT * FROM exercises");
  $stmt->execute();
  $exerciseList = $stmt->fetchAll();

  var_dump($exerciseList)

?>

<?php 
foreach ($exerciseList as $exercise) :
?>

<p><?php echo $exercise['exerciseName'] ?></p>
<p><?php echo $exercise['weight'] ?></p>
<p><?php echo $exercise['reps'] ?></p>
<p><?php echo $exercise['sets'] ?></p>


<?php endforeach ?>