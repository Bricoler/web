<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Cross Site Scripting</h1>
    <?php
    //echo '<script>alert("babo");</script>';
    echo htmlspecialchars('<script>alert("babo");</script>');
    ?>
  </body>
</html>
