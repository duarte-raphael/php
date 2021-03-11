<?php

function tab1()
{
    $nbrNote = readline("entrer un nombre : ");
    for ($i = 0; $i <= $nbrNote; $i++) {
        $note[$i] = readline("entrer la veleur du tableau: ");
    }
    return $note;
}

function tab2(&$note)
{
    for ($i = 0; $i < count($note); $i++) {
        $selectedElement = $note[$i];
        $selectedIndex = $i;
        for ($j = $i + 1; $j < count($note); $j++) {
            if ($note[$j] > $selectedElement) {
                $selectedElement = $j;
            }
        }
        if ($i != $selectedIndex) {
            $temp = $note[$i];
            $note[$i] = $note[$selectedIndex];
            $note[$selectedIndex] = $temp;
        }
    }
}
function tab3($note)
{
    for ($i = 0; $i < count($note); $i++) {
        echo "$note";
    }
}

tab3(tab2(tab1()));
