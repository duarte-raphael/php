<?php 

function tab() {
    $voyelles[0]="a";
    $voyelles[1]="e";
    $voyelles[2]="i";
    $voyelles[3]="o";
    $voyelles[4]="u";
    $voyelles[5]="y";
    for ($i=0; $i <= 5; $i++) {
        echo($voyelles[$i]. " ");
    }
}
tab();