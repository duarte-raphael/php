<?php

function getNumberWord()
{
    $compteur = 1;
    $phrase = readline("entrer une phrase :");
    for ($i = 0; $i <= strLen($phrase) - 1; $i++) {
        if ($phrase[$i] == " ") {
            $compteur++;
        }
    }
    echo $compteur;
}

getNumberWord();
