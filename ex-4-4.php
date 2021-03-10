<?php 

function price($copy) {
    $prix = 0;
    if($copy < 11) {
    $prix = 0.1 * $copy;
    } else if ($copy < 31) {
                $prix = 1 + ($copy - 10) * 0.09; 
    } else {
        $prix = 1 + (20 * 0.09) + ($copy - 30) * 0.08;
    }
    echo $prix;
}



$copy = readline("saisir le nombre de photocopie :");
price($copy);
