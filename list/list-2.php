<?php

$dados = [
    'nome' => 'guilherme',
    'nota' => '8',
    'idade' => '21'
];

['nome' => $nome, 'nota' => $net, 'idade' => $idade ] = $dados;

var_dump($net);
?>