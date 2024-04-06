



<!DOCTYPE html>
<html lang="aaa">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>


    <p>
    
        <?php
       echo "昇順ソートします。";
       echo "<br>";
      $nums = [15, 4, 18, 23, 10];
      sort($nums);

    
      foreach ($nums as $num) {
          echo $num . "<br>";
      }

    // print_r($nums)."<br>";
    //   echo "<br>"; 
   


      echo "降順とにソートします。";
      echo "<br>";
      $nums = [15, 4, 18, 23, 10];
      rsort($nums);
      foreach ($nums as $num) {
          echo $num . "<br>";
      }

      


     
      
        ?>
    </p>
</body>

</html>



<!-- output -->


<!-- http://localhost/samurai-php/htdocs/kadai_sort/sort.php/ -->
<!-- 
昇順ソートします4
10
15
18
23
降順とにソートします23
18
15
10
4 -->