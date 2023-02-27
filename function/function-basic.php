<?php

function showMensage($msg)
{
	echo $msg.PHP_EOL;
}

showMensage('Você pode sacar');

function add($valuePrime)
{
    return $valuePrime + 2;
}


$addValue = add(5);
var_dump($addValue);


?>