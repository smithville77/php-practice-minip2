<?php

require_once __DIR__ . '/connection.php';

if (isset($_POST['select-exercise'])) {
    $exerciseName = $_POST['select-exercise'];

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
}
?>
<form method="post">

    <select name="select-exercise" id="select-exercise">
        <option value=""></option>
        <option value="Bench Press">Bench Press</option>
        <option value="Squat">Squat</option>
    </select>
    <input type="submit" />

</form>