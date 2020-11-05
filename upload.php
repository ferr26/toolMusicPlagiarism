<?php

$length=count($_FILES["fileToUpload"]["name"]);

for ($i =0; $i <= $length-1; $i++) {
    $nomefile=$_FILES ['fileToUpload']['name'][$i];
    move_uploaded_file ($_FILES ['fileToUpload']['tmp_name'][$i], 'Parts/'.$nomefile);
  }

$comando='python musicParser3.py';
exec($comando, $out, $status);
echo($comando);
echo("<br>");
echo(count($out));
echo("<br>");
echo($status);
echo("<br>");


$comando2='python main.py';
exec($comando2, $out2, $status2);
echo($comando2);
echo("<br>");
echo(count($out2));
echo("<br>");
echo($status2);
echo("<br>");
echo($out2[0]);
echo("<br>");
echo("<br>");
echo($out2[1]);
echo("<br>");





?>