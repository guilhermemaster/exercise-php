<?php

print PHP_EOL;

$accounts1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];

$accounts2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$accounts3 = [
    'titular' => 'Jose',
    'saldo' => 50000
];

$currentAccounts = [
    12345678910 => $accounts1,
    12345678911 => $accounts2,
    12325678912 => $accounts3
];

foreach ($currentAccounts as $id => $accounts) {
    echo $accounts['titular'] . PHP_EOL;
}

foreach ($currentAccounts as $id => $accounts) {
    echo $id . PHP_EOL;
}


print PHP_EOL;

?>