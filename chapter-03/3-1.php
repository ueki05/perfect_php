<h1>3.1 型</h1>

<h2>3.1.1 PHPの型</h2>
<ul>
  <li>PHPには8つの型がある</li>
  <li>PHPは動的型付け言語</li>
</ul>

<h2>3.1.2 整数</h2>
<ul>
  <li>整数は10進数、先頭に0xをつけた16進数、先頭に0をつけた8進数のいずれかで指定可能
  <li>PHPは符号無し整数をサポートしていない</li>
  <li>整数のサイズはPHP_INT_SIZE定数で確認することができる</li>
  <li>整数の最大値もPHP_INT_MAX定数で得ることができる</li>
  <li>PHPでは最大値を超えた整数は自動的に浮動小数型(float)へキャストされる</li>
  <?php
    $int1 = 1;
    var_dump($int1);
    $int2 = -1;
    var_dump($int2);
    $int3 = 011;
    var_dump($int3);
    $int4 = 0xff;
    var_dump($int4);
    $int5 = PHP_INT_MAX;
    var_dump($int5);
    $int6 = PHP_INT_MAX + 1;
    var_dump($int6);
  ?>
  <li>整数型へのキャストには(int)または(integer)またはintval()関数を使う</li>
<?php
    $int1 = intval("1");
    var_dump($int1);
    $int2 = (int)"1";
    var_dump($int2);
?>
</ul>

<h2>3.1.4 文字列</h2>
<?php
  $string1 = 'this is string';
  $string2 = "this is string";
  $string3 = 'hi, $string2 \n'; // シングルクォートは変数展開されない
  $string4 = "hi, $string2 \n"; // ダブルクォートは変数展開される
  var_dump($string1);
  var_dump($string2);
  var_dump($string3);
  var_dump($string4);

  $age = 15;

  // $ageというヘンスだが、どこまでが変数だかわからない
  echo "$ageyears old.", PHP_EOL;   // Notice: Undefined variable: ageyears

  // 波括弧で変数名を囲む
  echo "${age}years old.", PHP_EOL; // 15years old
?>
<h3>ヒアドキュメント</h3>
<?php
  $age = 15;

  $foo = <<<EOI
ヒアドキュメントでは、このように、
複数行にわたる文章をそのまま表記することができます。

Tomの年齢は "$age" 歳です。
EOI;
  echo $foo;
?>

<h3>文字列型とキャスト</h3>
<?php
  echo 15.0;  // 文字列型にキャストされ、整数と判断され、".0"が省略される
  printf('%.1f', 15.0);
?>
