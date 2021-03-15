<?php


$phrase = readline("entre une phrase : ");

function estUneVoyelle($lettre)
{
    $voyelles = "aeiouy";
    for ($i = 0; $i < strLen($voyelles); $i++) {
        if ($voyelles[$i] == $lettre) {
            return true;
        }
    }
    return false;
}
function compteurVoyelle($phr)
{
    $compteur = 0;
    for ($i = 0; $i < strLen($phr); $i++) {
        if (estUneVoyelle($phr[$i])) {
            $compteur++;
        }
    }
    return $compteur;
}

$p = compteurVoyelle($phrase);
echo $p;
