<?php

function getCategorie($age) {
    if($age >= 12) {
		return "cadet";
	} else if ($age > 9){
		return"minime";
	} else if ($age > 7){
		return "pupille";
	} else if ($age > 5){
		return "poussin";
	} else {
		return "Hors catégorie";
	}
}
$ages = readline("entrer un nombre : ");
echo getCategorie($ages);