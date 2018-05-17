<?php

echo 'test start', PHP_EOL;

$ret0 = array_reverse(array('a', 'b'));
var_dump($ret0);

$ret1 = array_reverse();  // 引数の間違い
$ret2 = array_reverse(1); // 引数の型の違い

echo 'test finish', PHP_EOL;
