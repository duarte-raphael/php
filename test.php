<?php

$myFile = fopen("test.txt", "r") or die("unable to open file!");

while (!feof($myFile)) {
    echo fgets($myFile) . "\n";
}
fclose($myFile);

$myFile = fopen("test.txt", "a+") or die("unable to open file!");
$fullName = "david dupont" . "\n";
fwrite($myFile, $fullName);
fclose($myFile);
