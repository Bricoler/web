<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>String * String Operator</h1>
    <?php
    echo 'Hello World<br/>';
    echo "This also works<br/>";
    echo "Hello \"w\"ord";
    ?>
    <h2>concatenation operator</h2>
    echo "Hello"." World" in php:<br>
    <?php
    echo "Hello"." World<br>";
    $str = "Hello"." World";
    echo 'string length: '.strlen($str).'<br>';
    $str .= " Korea";
    echo $str;
    ?>
  </body>
</html>
