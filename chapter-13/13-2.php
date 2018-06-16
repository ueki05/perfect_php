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
