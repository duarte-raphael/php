<?php

function getTime($heure, $minute, $seconde) {
    if ($seconde == 59 || $minute == 59 || $heure == 23) {
			$seconde = 0;
			$minute = 0;
			$heure = 0;
	}   else if ($seconde == 59 || $minute == 59) {
				$seconde = 0;
				$minute = 0;
				$heure += 1;
		}
			else if ($seconde == 59) {
					$seconde = 0;
					$minute += 1;
			}
				else {
					$seconde += 1;
                }
			echo $heure. ":". $minute.":". $seconde;
}


$heure = readline("entrer l'heure :");
$minute = readline("entrer les minutes :");
$seconde = readline("entrer les seconde :");
getTime($heure, $minute, $seconde);