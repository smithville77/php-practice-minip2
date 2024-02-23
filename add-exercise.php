<?php

require_once __DIR__ . '/connection.php';

$stmt = $conn->prepare("SELECT `exerciseName` FROM `exercises`");
$stmt->execute();

$listOfExercises = $stmt->fetchAll();


// create list of unique exercises
$uniqueExerciseArray = [];
foreach ($listOfExercises as $exercise) {
    if (!in_array($exercise, $uniqueExerciseArray)) {
        $uniqueExerciseArray[] = $exercise;
    }
}

var_dump($uniqueExerciseArray);


$newExercise = [];



?>

<select>
    <?php foreach ($uniqueExerciseArray as $exercise) : ?>
        <option value='<?php echo $exercise?>'>
            <?php echo $exercise['exerciseName'] ?>
        </option>
    <?php endforeach ?>
</select>
