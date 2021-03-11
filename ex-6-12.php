<?php

function tab1()
{
    $nbrTab = readline("entrer nombre de case du tableau 1: ");
    for ($i = 1; $i <= $nbrTab; $i++) {
        $array1[$i] = readline("entrer la veleur du tableau 1 case n° $i: ");
        $array1[$i] = $array1[$i] + 1;
    }
    return $array1;
}
function tab2($array1)
{
    for ($i = 1; $i <= count($array1); $i++) {
        echo "$array1[$i]\n";
    }
}
$tab3 = tab1();
tab2($tab3);
