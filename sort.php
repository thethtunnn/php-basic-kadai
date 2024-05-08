<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10];
        function sort_2way($array, $order) {
             //If $order is  TRUE, otherwise as FALSE
            $order = (bool) $order;
            if ($order) {
                echo "昇順ソートします。true";
                echo "<br>";
                sort($array); 
            } else {
                echo "降順にソートします。false";
                echo "<br>";
                rsort($array); 
            }
            foreach ($array as $num) {
                echo $num . "<br>";
            }
            return;
        }
        sort_2way($nums, true);
        echo "<br>"; 
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>
