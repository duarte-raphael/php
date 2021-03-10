<?php


// function getNumber($nombre) {
//     $estcorrect == $nombre < 4 && $nombre < 0;
//     while(!$estcorrect) {
//         echo $nombre;
//     }
// $nombre = readline("entrer un nombre entre 1 et 3 : ");
// getNumber($nombre);

function getNumber() {
    do{
        $nombre = readline("entrer un nombre entre 1 et 3 : ");
    } while($nombre > 3 || $nombre < 1);
}
echo(getNumber());