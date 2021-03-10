<?php


function suiteNombre($nombre) {
    $result = 0;
    for($i=1; $i <= $nombre; $i++) {
        
        $result = $result + $i;
    }
    echo"$result\n";
}
$nombre = readline("entrez 1 nombre pour connaitre la somme de ses entier :");
suiteNombre($nombre);