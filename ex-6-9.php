<?php 

function tab() {
    $tableau[0]=2;
    $tableau[1]=4;
    $tableau[2]=6;
    $tableau[3]=8;
    $tableau[4]=10;
    $tableau[5]=12;
    for($i=0; $i <= 5; $i++) {
        $result = $result + $tableau[$i];
    }
    echo $result;
}
tab();