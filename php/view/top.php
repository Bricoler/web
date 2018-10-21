<?php
  require_once('lib/print.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>WEB1 - Welcome</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1><a href="/php/index.php">WEB</a></h1>
    <?php
      echo '<div><ol>';
      print_list('./data');
      echo '</ol></div>';
    ?>
