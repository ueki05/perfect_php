<h1>13.3 配列</h1>
<h2>13.3.1 配列に対する操作</h2>
<p>配列はPHPの中で文字列と並んでもっとも多用される重要な型。配列に対する操作を行う関数は非常に多く用意されている。</p>
<p>配列に対してどういった操作を行えるのか、PHPの持っている配列操作の要所を押さえておく。</p>

<h2>13.3.2 配列の要素の追加と削除</h2>
<?php
$array = array('cake', 'pudding',);
var_dump($array);

// 配列の先頭要素を取り出す
$cake = array_shift($array); // 'cake'
var_dump($cake);

// 配列の先頭に要素を追加する
array_unshift($array, 'candy', 'chocolate'); // 'candy', 'chocolate', 'pudding'
var_dump($array);

// 配列の末尾から要素を取り出す
$pudding = array_pop($array); // 'pudding' が取り出される
var_dump($pudding);

// 配列の末尾に要素を追加する
array_push($array, 'marshmallow', 'cookie'); // 'candy', 'chocolate', 'marshmallow', 'cookie'
var_dump($array);
?>

<h2>13.3.3 配列の要素を並び替える</h2>
<?php
$array = array(10, 5, 3, 6, 1);
sort($array);
var_dump($array);
rsort($array);
var_dump($array);
?>

<h3>sort()系関数の第2引数</h3>
<?php
$array1 = array('9', '1e1', '8a');
$array2 = array('1e1', '9', '8a');
sort($array1);
sort($array2);
var_dump($array1, $array2);
?>

<h2>13.3.4 配列の要素数を知る</h2>
<?php
$array = array(0, 1, 2, 3, array(4, 5,),);
echo count($array), PHP_EOL;
echo count($array, COUNT_RECURSIVE), PHP_EOL;
?>

<h2>13.3.5 文字列を分割して配列にする</h2>
<?php
$paths = explode(PATH_SEPARATOR, get_include_path());

foreach ($paths as $path) {
  // echo realpath($path), PHP_EOL;
}
?>

