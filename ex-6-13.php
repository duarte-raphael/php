<?php

function tab1()
{
    $nbrTab = readline("entrer nombre de case du tableau 1: ");
    for ($i = 1; $i <= $nbrTab; $i++) {
        $array1[$i] = readline("entrer la veleur du tableau 1 case n° $i: ");
    }
    return $array1;
}
function tab2($array1)
{
    for ($i = 1; $i <= count($array1); $i++) {
        if ($i == 1) {
            $resultMax = $array1[$i];
            $maxIndince = 1;
        }
        if ($array1[$i] > $resultMax) {
            $resultMax = $array1[$i];
            $maxIndince = $i;
        }
    }
    echo "la plus grande valeur est $resultMax et son indice du tableau est $maxIndince";
}
$tab3 = tab1();
tab2($tab3);
