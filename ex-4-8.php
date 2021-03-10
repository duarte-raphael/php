<?php 

function calendrier($jour, $mois, $annee) {

    $estBisextile = ($annee % 4 == 0 && $annee % 100 != 0) || $annee % 400 == 0;
    $estDateBisextileInvalide = $mois == 2 && (($estBisextile && $jour > 29) || (!$estBisextile && $jour > 28));
    $estDateMois30Invalide = $jour > 30 && ($mois == 4 || $mois == 6 || $mois == 9 || $mois == 11);

    if ($jour > 31 || $mois > 12 || $estDateBisextileInvalide || $estDateMois30Invalide) {
            echo "date invalide";
        } else {
            echo "date valide";
        }	
}
$jour = readline("saisir le jour : ");
$mois = readline("saisir le mois : ");
$annee = readline("saisir le année : ");
calendrier($jour, $mois, $annee);