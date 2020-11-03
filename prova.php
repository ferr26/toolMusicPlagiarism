<?php

$comando= 'python prova.py';
exec($comando, $out, $status);
echo $out[0];
echo($status);


?>