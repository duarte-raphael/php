<?php

function getNumber() {
    do {
        $nombre = readline("saisir un nombre : ");
        if ($nombre > 20) {
            echo "plus petit \n";
        } else if ($nombre < 10) {
            echo "plus grand \n";
        }
    } while($nombre < 10 || $nombre > 20);
    echo "trouvé !";
}

echo(getNumber());