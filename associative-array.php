<?php

print PHP_EOL;

$list=[ 'name' => 'guilherme', 'balance'=>'1000'];
$list2=[ 'name' => 'antonio', 'balance'=>'1000'];
$accounts = [$list, $list2];
for ($i = 0; $i < count($accounts); $i++) {
    echo $accounts[$i]['name'] . PHP_EOL;

}
var_dump($accounts);

print PHP_EOL;

?>