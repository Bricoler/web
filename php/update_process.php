<?php
  rename("data/".$_POST['old_title'], "data/".$_POST['title']);
  file_put_contents('data/'.$_POST['title'], $_POST['description']);
  header('Location: /php/index.php?id='.$_POST['title']);
?>
