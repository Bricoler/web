<?php
  require_once('lib/print.php');
  require_once('view/top.php');
?>
    <a href="create.php">create</a>
    <form class="" action="create_process.php" method="post">
      <p>
        <input type="text" name="title" value="" placeholder="Title">
      </p>
      <p>
        <textarea name="description" rows="8" cols="80" placeholder="Description"></textarea>
      </p>
      <p>
        <input type="submit" name="" value="Submit">
      </p>
    </form>
    <?php
      require_once('view/bottom.php');
    ?>
