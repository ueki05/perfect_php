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

<h2>3.1.5 論理型</h2>
<?php
  $boolean = true;
  var_dump($boolean);

  $boolean = (bool)1;
  var_dump($boolean);
?>
<h3>PHPがfalseと判断するもの</h3>
<ul>
  <li>false(論理型)</li>
  <li>0(整数型)</li>
  <li>0.0(浮動小数点数型)</li>
  <li>空の文字列(""), 文字列のゼロ("0")</li>
  <li>要素の数がゼロの配列</li>
  <li>null(値がセットされていない変数を含む)</li>
  <li>空のタグから作成されたSimpleXMLオブジェクト</li>
</ul>

<h2>3.1.6 配列</h2>
<p>PHPでは<strong>添字配列</strong>と<strong>連想配列</strong>は区別されておらず、どちらも"配列"と呼ばれる。</p>
<p>3.3(P.82)で詳しく扱う。</p>

<h2>3.1.7 オブジェクト</h2>
<p>オブジェクト型は、クラスをnew演算子によってインスタンス化したものへの参照。5章(P.119)で詳しく説明する。</p>

<h2>3.1.8 リソース</h2>
<p>リソース型は、オープンされたファイルやデータベース接続など、何らかの外部リソースへの参照を保持している。</p>
<p>PHPには、多くの外部リソースを扱う拡張昨日がハンドルされているため、多くのリソース型とその初期化関数が存在している。</p>

<table border="1">
  <thead>
    <tr>
      <th>リソース</th>
      <th>拡張機能</th>
      <th>初期化関数</th>
      <th>補足</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>sockets file</td>
      <td>sockets</td>
      <td>socket_create()</td>
      <td>ソケットリソース</td>
    </tr>
    <tr>
      <td>curl</td>
      <td>curl</td>
      <td>curl_init()など</td>
      <td>curlリソース</td>
    </tr>
    <tr>
      <td>mysql link</td>
      <td>mysql</td>
      <td>mysql_connect()</td>
      <td>MySQLサーバへの接続リソース</td>
    </tr>
    <tr>
      <td>stream</td>
      <td>標準など</td>
      <td>fopen()など</td>
      <td>プロトコルラッパー</td>
    </tr>
  </tbody>
</table>
<p>変数のもつリソース型の種類は、get_resource_type()関数を使って調べることができる。</p>
<?php
  $mysql = mysql_connect('localhost', 'root', 'root');
  var_dump(get_resource_type($mysql));
?>

<h2>3.1.9 null</h2>
<p>変数がnullとなる場合</p>
<ul>
  <li>定数nullが代入されている場合</li>
  <li>値が何も代入されていない場合</li>
  <li>unset()されている場合</li>
</ul>
<?php
  // 返り値を返さない関数の定義
  function no_return_func() {
  }

  $null_value = no_return_func(); // nullが代入される
  var_dump($null_value);
?>
<?php
  $var = 1;
  var_dump(isset($var));  // true
  $var = null;
  var_dump(isset($var));  // false
  var_dump($var);         // null
  unset($var);
  var_dump(isset($var));  // false
  var_dump($var);         // Notice: Undefined variable
?>
