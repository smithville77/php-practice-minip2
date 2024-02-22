<?php

  require_once __DIR__ . '/connection.php';
  

  $stmt = $conn->prepare("SELECT * FROM exercises");
  $stmt->execute();
  $exerciseList = $stmt->fetchAll();

  // var_dump($exerciseList);

?>

<?php 
foreach ($exerciseList as $exercise) :
?>

<p><?php echo $exercise['exerciseName'] ?></p>
<p><?php echo $exercise['weight'] ?></p>
<p><?php echo $exercise['reps'] ?></p>
<p><?php echo $exercise['sets'] ?></p>


<?php endforeach ?>