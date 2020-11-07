<?php
$array = [
    ["susi",92],
    ["andi",80],
    ["toto",75],
    ["made",65],
    ["dewi",60],
];

for( $a =0; $a <count($array);$a++) {
    if($array[$a][1] >= 90) {
        echo $array[$a][0]." gradenya : A+\n";
        
    } else if($array[$a][1]>=80) {
        echo $array [$a][0]." gradenya : A\n";

    } else if($array[$a][1]>=70) {
        echo $array [$a][0]." gradenya : B\n";

    }else if ($array [$a][1] >=60 ) {
        echo $array [$a][0]. " gradenya : C\n";

    }else {
        echo $nilai [$a][0]." gradenya : D\n";
    }
}
?>