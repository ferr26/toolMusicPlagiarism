<?php
$target_dir = "pippo/";

$length=count($_FILES["fileToUpload"]["name"]);

for ($i =0; $i <= $length-1; $i++) {
    $nomefile=$_FILES ['fileToUpload']['name'][$i];
    move_uploaded_file ($_FILES ['fileToUpload']['tmp_name'][$i], 'Parts/'.$nomefile);
  }
?>