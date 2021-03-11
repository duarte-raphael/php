<?php

function tab1()
{
    $nbrNote = readline("entrer nombre de note du tableau : ");
    for ($i = 1; $i <= $nbrNote; $i++) {
        $note[$i] = readline("entrer la veleur du tableau 1 case n° $i: ");
    }
    return $note;
}


function tab2($note)
{
    $average = 0;
    for ($i = 1; $i <= count($note); $i++) {
        $average = $average + $note[$i] / count($note);
    }
    echo "$average";
}


$tab3 = tab1();
tab2($tab3);
