<?php

$nota1 = [
            'guilherme' => 8,
            'maria' => 7,
        ];

$nota2 = [
            'maria' => 7,
            'teresa' => 4,
];

var_dump(array_diff_key($nota1, $nota2));



?>