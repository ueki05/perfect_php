<?php
// 2.3 定数

// 2.3.1 定数定義
define('BOOK', 'Perfect PHP');
echo BOOK, PHP_EOL;

// 2.3.2 constant()関数
$value = 'BOOK';
echo constant($value), PHP_EOL;

// 2.3.3 定義済み定数
// PHPによって定義されている定数
echo PHP_VERSION . PHP_EOL;
echo PHP_OS . PHP_EOL;
echo PHP_EOL . PHP_EOL;
// echo STDIN . PHP_EOL;
echo E_WARNING . PHP_EOL;

// どのような名前でどのような定数が定義されているかを調べる
// var_dump(get_defined_constants());

// マジック定数一覧
$constant = new constant();
$constant->show_defined_magic_constants();

class constant
{
  function show_defined_magic_constants() {
    echo __FILE__ . PHP_EOL;
    echo __DIR__ . PHP_EOL;
    echo __LINE__ . PHP_EOL;
    echo __FUNCTION__ . PHP_EOL;
    echo __CLASS__ . PHP_EOL;
    echo __METHOD__ . PHP_EOL;
    echo __NAMESPACE__ . PHP_EOL;
  }
}
