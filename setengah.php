<?php

echo "masukan bilang : ";
$bil = trim(fgets(STDIN));

for ($a=1; $a <=$bil;$a++){
    for ($b =1; $b<=$a;$b++) {
        echo $b;
    }
    echo "\n";
}
?>