<?php 

function election($c1,$c2,$c3,$c4) {
    $estElimine = $c2 > 50 || $c3 > 50 || $c4 > 50 || $c1 < 12.5;
	$estFavorable = $c1 > $c2 && $c1 > $c3 && $c1 > $c4;
	if ($estElimine){
		echo "Candidat 1 battu";
	} else if ($c1 > 50){
				echo "Candidat 1 élu";
			} else if($c1 >= 12.5 && $estFavorable){
						echo "Deuxieme tour en ballottage favorable";
					} else if ($c1 >= 12.5){
						echo "Deuxieme tour en ballottage défavorable";
							}
}

$c1= readline("saisir le scrore candidat 1");
$c2= readline("saisir le scrore candidat 2");
$c3= readline("saisir le scrore candidat 3");
$c4= readline("saisir le scrore candidat 4");
election($c1,$c2,$c3,$c4);