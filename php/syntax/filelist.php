<?php
$filelist = scandir('../data');
for($i=0; $i<count($filelist); $i++) {
  echo "$filelist[$i]<br>";
}
?>
