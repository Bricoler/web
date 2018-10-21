<?php
  require_once('lib/print.php');
  require_once('view/top.php');
?>
    <a href="/php/create.php">create</a>
    <?php
      echo '<a href="/php/index.php?id='.$_GET['id'].'">cancel</a>';
    ?>
    <form class="" action="update_process.php" method="post">
      <?php
      echo '<input type="hidden" name="old_title" value="'.$_GET['id'].'">';
      ?>
      <p>
        <?php
          $title = $_GET['id'];
          echo '<input type="text" name="title" value="'.$title.'">';
        ?>
      </p>
      <p>
        <?php
          $description = file_get_contents('data/'.$_GET['id']);
          echo '<textarea name="description" rows="8" cols="80">'.$description.'</textarea>';
        ?>
      </p>
      <p>
        <input type="submit" name="" value="Submit">
      </p>
    </form>
<?php
  require_once('view/bottom.php');
?>
