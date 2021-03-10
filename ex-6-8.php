<?php 

function tab() {
    $negatif = 0;
    $positif = 0;
    $nbrTableau = readline("entre le nombre de case du tableau souhaitée ");
    for($i=1; $i <= $nbrTableau; $i++) {
        $tableau[$i] = readline("entrer les valeur du tableau case n° $i : ");
        if($tableau[$i] < 0) {
            $negatif++;
      
        }
        if($tableau[$i] >= 0) {
            $positif++;
            
        }
    }       echo "$negatif sont negatif \n";
            echo "$positif sont positif";
}
tab();