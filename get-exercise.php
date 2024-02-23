<?php

require_once __DIR__ . '/connection.php';

$exerciseName = "Bench Press";

$stmt = $conn->prepare("SELECT `id`, `exerciseName`, `sets`, `reps`, `weight`, `rpe` FROM `exercises` WHERE `exerciseName` = :exerciseName");
$stmt->bindParam(':exerciseName', $exerciseName);
$stmt->execute();
$exerciseList = $stmt->fetchAll();

// Output the results
foreach ($exerciseList as $exercise) {
    echo "ID: " . $exercise['id'] . "<br>";
    echo "Exercise Name: " . $exercise['exerciseName'] . "<br>";
    echo "Sets: " . $exercise['sets'] . "<br>";
    echo "Reps: " . $exercise['reps'] . "<br>";
    echo "Weight: " . $exercise['weight'] . "<br>";
    echo "RPE: " . $exercise['rpe'] . "<br>";
    echo "<hr>";
}
