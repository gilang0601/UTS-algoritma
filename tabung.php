<?php

echo " masukan tinggi : ";
$t = trim(fgets(STDIN));

echo " masukan jari jari : ";
$r = trim(fgets(STDIN));

$phi = 3.14;

$vol = $phi * $r * $r * $t;

echo "hasil nya = $vol ";

?>