<?php 

function estImposable($age, $sexe) {

	$estFemmeImposable = $sexe == "F" && $age > 18 && $age < 35;
	$estHommeImposable = $sexe == "H" && $age > 20;
	
	if($estFemmeImposable || $estHommeImposable) {
		return true;
	} 
    else {
		return false;
	}
}
$age = readline("saisir votre age : ");
$sexe = readline("saisir votre sexe : ");

if(!estImposable($age, $sexe)){
    echo("Non Imposable");
} else {
    echo("Imposable");
}