<?php


function suiteNombre($nombre) {
    for($i=1; $i <= 10; $i++) {
        $result = $nombre + $i;
        echo"$result\n";
    }
}
$nombre = readline("entre 1 nombre pour connaitre les 10 suivant :");
suiteNombre($nombre);