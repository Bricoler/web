<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo '<h1>Conditional</h1>';
    echo '<h2>if</h2>';
    echo '1<br>';
    if(isset($_GET['number'])) {
      $num = $_GET['number'];
      if($num > 5) {
        echo "$num is greater than 5<br>";
      }
      else {
        echo '$num is less than or equal to 5<br>';
      }
    }
    else {
      echo "You must submit queryString \"number\"";
    }
    ?>
  </body>
</html>
