<?php

function tab1() {
    $nbrTab = readline("entrer nombre de case du tableau 1: ");
    for($i = 1; $i <= $nbrTab; $i++){
        $array1[$i] = readline("entrer la veleur du tableau 1 case n° $i: ");
    }
    $nbrTab2 = readline("entrer nombre de case du tableau 2: ");
        for($i = 1; $i <= $nbrTab2; $i++){
            $array2[$i] = readline("entrer la veleur du tableau 2 case n° $i: ");
    }
    $result = 0;
    for($i = 1; $i <= $nbrTab; $i++) {
        for($j = 1; $j <= $nbrTab2; $j++) {
            $result = $result + $array1[$i] * $array2[$j];
        }
    } echo "$result";
}
tab1();