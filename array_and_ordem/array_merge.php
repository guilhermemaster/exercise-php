<?php

$nota1 = [
            'guilherme',
            'maria',
        ];

$nota2 = [
            'carlos',
            'teresa',
];


var_dump(array_merge($nota1, $nota2));

$nota4 = [
    'guilherme',
    'maria',
];

$nota5 = [
    'carlos',
    'teresa',
];

var_dump($nota4 + $nota5);




$nota6 = [
    'guilherme',
    'maria',
];

$nota7 = [
    'carlos',
    'teresa',
];

$alunos = [...$nota6, ...$nota7];

var_dump($alunos);

?>