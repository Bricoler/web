<?php
function print_list($dir) {
  $list = scandir($dir);
  for($i=0; $i<count($list); $i++) {
    if($list[$i]=='.' or $list[$i]=='..'){
      continue;
    }
    echo "<li><a href=\"/php/index.php?id=$list[$i]\">$list[$i]</a></li>";
  }
}

function print_info() {
  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    if(file_exists("data/".$_GET['id'])) {
      echo file_get_contents("data/".$_GET['id']);
    }
    else {
      echo "File Not Found!";
    }
  }
  else {
    echo "Welcome";
  }
}
?>
