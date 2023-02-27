<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;

unset($idadeList[4]);
$idadeList[] = 20; //inseri na lista


var_dump($idadeList);

var_dump($idadeVinicius);

?>