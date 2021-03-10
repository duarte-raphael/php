<?php 

function tab() {
    $result=0;
    for ($i=1; $i <= 9; $i++) {
        $tableau[$i] = readline("entrer les valeur du tableau case n° $i : ");
        $result = $result + $tableau[$i];  
    } $average = $result / 9;
    echo "$average";
}
tab();