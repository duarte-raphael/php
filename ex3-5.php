 <?php
$nombre = readline("entrer un nombre : ");
$nombre2 = readline("entrer un nombre : ");
$result= $nombre + $nombre2;
if ($nombre && $nombre2 > 0 || $nombre && $nombre2 < 0) {
    echo "le produit est positif";
}
else if ($nombre < 0 && $nombre2 > 0 || $nombre > 0 && $nombre2 < 0 ) {
    echo "le produit est negatif";
}
else {
    echo "le produit est nul";
}