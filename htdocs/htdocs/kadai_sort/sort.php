<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // Declare the array to be sorted
        $nums = [15, 4, 18, 23, 10 ];

        // Custom sorting function
        function sort_2way($array, $order) {
            if ($order === 'ascending') {
                sort($array); // Sort in ascending order
            } elseif ($order === 'descending') {
                rsort($array); // Sort in descending order
            }
            return $array; // Return the sorted array
        }

        // Sort in ascending order
        $ascending_sorted = sort_2way($nums, 'ascending');
        echo "昇順ソートします。";
        echo "<br>";
        foreach ($ascending_sorted as $num) {
            echo $num . "<br>";
        }

        // Sort in descending order
        $descending_sorted = sort_2way($nums, 'descending');
        echo "降順とにソートします。";
        echo "<br>";
        foreach ($descending_sorted as $num) {
            echo $num . "<br>";
        }
        ?>
    </p>
</body>

</html>
