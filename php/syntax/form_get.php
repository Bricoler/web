<?php
  file_put_contents('result/'.$_GET['title'], $_GET['description']);
  echo "<p>title: ".$_GET['title']."</p>";
  echo "<p>description: ".$_GET['description']."</p>";
?>
