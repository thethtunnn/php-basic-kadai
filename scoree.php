<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php kadai_005</title>
</head>
<body>
<?php

// Create an array for the scores of 10 students
$scores = array(80, 60, 55, 40, 100, 25, 80, 95, 30, 60);

// Calculate total score
$totalScore = array_sum($scores);

// numberOfStudent = array length 10    265/10
echo $totalScore / count($scores);

?>
</body>
</html>