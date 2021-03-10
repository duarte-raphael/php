<?php 

function tab() {
    for ($i=1; $i <= 9; $i++) {
        $tableau[$i] = readline("entrer les valeur du tableau case n° $i : ");
    } 
    for ($i=1; $i <= 9; $i++) {
        echo($tableau[$i]. " ");
    }
}
tab();