<?php 

function getMaxNumber() {
    $i = 1;
    do {
        $nombre = readline("entrer un nombre : ");
        if ($nombre != 0){
            if ($i == 1) {
                $max = $nombre;
                $indinceMax = 1;
            }
                if ($nombre > $max){
                    $max = $nombre;
                    $indiceMax = $i;
                }
        } $i++; 
    } while($nombre != 0);
    if ($nombre == 0) {
        echo "Vous avez quittez le programme \n";
        echo "La plus grande valeur est : $max";
    }
}

getMaxNumber();