<?php

function getSomme() {
	$somme = 0;
	do {
		$prix = readline("Saisir le prix : ");
		$somme = $somme + $prix;
		
	} while ($prix != 0);
	return $somme;
}

function afficherCoupons($rendu){
	
	while($rendu > 0) {
		if($rendu >= 10){
			echo "10€ ";
			$rendu = $rendu - 10;
		}else if ($rendu >= 5) {
			echo "5€ ";
			$rendu = $rendu - 5;
		} else {
			echo "1€ ";
			$rendu= $rendu - 1;
		}
	}
}
$total = getSomme();
echo "la somme est de $total €\n";
$pay = readline("saisir le paiement : ");
$rendu = $pay - $total;
echo(afficherCoupons($rendu));
