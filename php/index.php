<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>WEB1 - Welcome</title>
    <meta charset="utf-8"/>
  </head>
  <body>
    <h1><a href="/php/index.php">WEB</a></h1>
    <?php
      require('modules.php');
      echo '<div><ol>';
      print_list('./data');
      echo '</ol></div>';
      print_info();
    ?>
  </body>
</html>
