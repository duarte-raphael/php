<?php 

function getMaxNumber() {
    for ($i=1; $i<=20; $i++) {
        $nombre = readline("entrer un nombre ". $i. " : ");
        if ($i == 1) {
            $max = $nombre;
            $indinceMax = 1;
        }
        if ($nombre > $max){
			$max = $nombre;
			$indiceMax = $i;
		}
    } 
    echo "le plus grand nombre est : $max, et son indice est $indiceMax";
}

getMaxNumber();