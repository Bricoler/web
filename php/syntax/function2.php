<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
      function basic() {
        print("Lorem ipsum dolor1<br>");
        print("Lorem ipsum dolor2<br>");
      }
      basic();
    ?>

    <h2>Parameter &amp; Argument</h2>
    <?php
    function sum($left, $right) {
      print($left+$right);
      print("<br>");
    }
    sum(2,4);
    sum(4,6);
    ?>

    <h2>Return</h2>
    <?php
      function sum2($left, $right) {
        return $left+$right;
      }
      print(sum2(2,4));
      $dir = 'result';
      if(!file_exists($dir)) {
        mkdir($dir);
      }
      file_put_contents("$dir/temp.txt", sum2(2,4));
    ?>
  </body>
</html>
