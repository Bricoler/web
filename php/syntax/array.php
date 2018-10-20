<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo '<h1>Array</h1>';
    $coworkers = array('egoing', 'leezche', 'duru', 'taeho');
    echo var_dump(count($coworkers)).'<br>';
    echo "$coworkers[2]<br>";
    echo "<h2>foreach statement:</h2>";
    foreach($coworkers as $value) {
      echo "$value<br>";
    }
    echo "<h2>for statement:</h2>";
    array_push($coworkers, 'graphittie');
    for($i=0; $i<count($coworkers); $i++) {
      echo "$coworkers[$i]<br>";
    }
    echo '<br>';
    array_splice($coworkers, 3, 0, array('minho'));
    for($i=0; $i<count($coworkers); $i++) {
      echo "$coworkers[$i]<br>";
    }
    ?>
  </body>
</html>
1
