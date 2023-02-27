<?php

$dados = [
    'nome' => 'guilherme',
    'nota' => '8',
    'idade' => '21'
];

extract($dados);

var_dump($nome);

var_dump(compact('nome', 'nota', 'idade'));


?>