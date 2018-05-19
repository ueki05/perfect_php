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
