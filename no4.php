<?php

echo "jumlah jam kerja : ";
$jk = trim(fgets(STDIN));

if( $jk <= 48) {
    $gaji = 50000*$jk;
    echo "jam kerja anda : $jk\n";
    echo "gaji pokok anda RP. $gaji";
} else {
    $lembur = $jk - 48;
    $jk = $jk - $lembur;

    $gaji1 =$jk * 50000;
    $gaji2 =$lembur *80000;

    $gaji= $gaji1+$gaji2;

    echo "jam lembur anda :  $lembur\n";
   
    echo "gaji pokok anda RP.  $gaji1\n";
   
    echo "gaji lebur anda RP. $gaji2\n";
   
    echo "total gaji RP.  $gaji";
}






?>