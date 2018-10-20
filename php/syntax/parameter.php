<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Hello, egoing!<br>
    <?php
    if(isset($_GET['name'])) {
      $name = $_GET['name'];
    }
    else {
      $name = 'minho';
    }
    echo "Hello, $name<br>";
    ?>
    안녕하세요. <?php echo $name; ?>님
  </body>
</html>
