<?php


function suiteNombre($nombre) {
    $result = 1;
    for($i=2; $i <= $nombre; $i++) {
        $result = $result * $i;
        echo"$result\n";
    }
    
}
$nombre = readline("entrez 1 nombre pour connaitre son factorielle :");
suiteNombre($nombre);