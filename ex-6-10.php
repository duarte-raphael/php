<?php

function tab()
{
    $nbrTab = readline("entrer nombre de case du tableau : ");
    for ($i = 0; $i < $nbrTab; $i++) {
        $array1[$i] = readline("entrer la veleur du tableau 1 case n° $i: ");
        $array2[$i] = readline("entrer la veleur du tableau 2 case n° $i: ");
        $array3[$i] = $array1[$i] + $array2[$i];
    }
    for ($i = 0; $i < $nbrTab; $i++) {
        echo "$array3[$i]\n";
    }
}
tab();
