<?php
  unlink('data/'.basename($_POST['id']));
  header('Location: /php/index.php');
?>
