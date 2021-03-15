<?php

$phrase = readline("entrer une phrase : "); // bonjour les amies
$caseSup = readline("entrer le numero de la case a supprimé : ");

function permut($sup, $phr)
{
    for ($i = $sup; $i < strlen($phr); $i++) {
        $phr[$i] = $phr[$i + 1];
    }
}
function delete($phr)
{
    substr($phr, -1);
}

$permutation = permut($caseSup, $phrase);
$laSaisie = delete($phrase);
echo $laSaisie;
