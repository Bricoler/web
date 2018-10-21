<?php
function print_list($dir) {
  $list = scandir($dir);
  for($i=0; $i<count($list); $i++) {
    $title = htmlspecialchars($list[$i]);
    if($list[$i]=='.' or $list[$i]=='..'){
      continue;
    }
    echo "<li><a href=\"/php/index.php?id=$title\">$title</a></li>";
  }
}

function print_title() {
  if(isset($_GET['id'])) {
    echo htmlspecialchars($_GET['id']);
  }
  else {
    echo "WEB";
  }
}

function print_desc() {
  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $basename = basename($_GET['id']);
    if(file_exists("data/".$basename)) {
      echo htmlspecialchars(file_get_contents("data/".$basename));
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
