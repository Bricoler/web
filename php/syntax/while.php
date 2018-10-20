<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo '<h2>while</h2>';
    $i = 0;
    while($i < 5) {
      echo $i.'<br>';
      $i += 1;
    }
    echo 'The End of the loop';
    ?>
  </body>
</html>
