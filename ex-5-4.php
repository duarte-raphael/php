<?php


function suiteNombre($nombre) {
    for($i=1; $i <= 10; $i++) {
        $result = $nombre * $i;
        echo"$nombre * $i = $result\n";
    }
}
$nombre = readline("entre 1 nombre pour connaitre sa table de multiplication :");
suiteNombre($nombre);