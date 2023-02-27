<?php

print PHP_EOL;

$idadeList = [21, 23, 19, 25, 30, 41, 18];

$idadeList[count($idadeList)] = 20; //add
$idadeList[] = 40; //add

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}

print PHP_EOL;

?>