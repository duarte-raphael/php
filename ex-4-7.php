<?php 

function assurance($age, $permis, $accident, $contrat) {
    if ($contrat > 1 ) {
        echo "tarif bleu";
    }
        else if ($age >= 25 && $permis >= 2 && $accident = 0)  {
            echo "tarif vert";
        }   else if ($age >= 25 && $permis >= 2 && $accident = 1 ||
                $age < 25 && $permis >= 2 && $accident = 0 ||
                $age > 25 && $permis < 2 && $accident = 0 ) {
                    echo "tarif orange";
            }   else if ($age < 25 && $permis >= 2 && $accident = 1 ||
                    $age >= 25 && $permis < 2 && $accident = 1 ||
                    $age >= 25 && $permis >= 2 && $accident = 2) {
                        echo "tarif rouge";
                }
}

$age = readline("quel age avez vous ? ");
$permis = readline("Depuis combien d'année avez vous le permis ? ");
$accident = readline("combien d'accident avez vous fait ? ");
$contrat = readline("avez vous deja un contrat chez nous ? si oui entre le nombre d'année de contrat : ");
assurance($age, $permis, $accident, $contrat);
