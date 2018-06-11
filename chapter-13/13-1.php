<h1>13.1 文字列</h1>
<h2>13.1.1 文字列に対する操作</h2>
<a href="http://jp.php.net/manual/ja/book.strings.php" target="_blank">公式マニュアル</a>

<h2>13.1.2 変数をフォーマット</h2>
<?php
$index = 125;
$message = '出力を行います';
printf("[%10d] %s", $index, $message);
?>

<?php
$a = 20;
$formatted = sprintf("%+010d", $a);
echo $formatted;
?>

<h2>13.1.3 数値をフォーマットする</h2>
<?php
echo number_format(100000000);
?>

<?php
echo number_format(100000000, 5);
?>

<?php
echo number_format(100000000, 5, ',', ' ');
?>

<h2>13.1.4 HTMLタグをエスケープする</h2>
<?php
$html = '<a href="http://example.com/">example link</a>';
echo $html;
echo htmlspecialchars($html, ENT_QUOTES);
?>
<ul>
  <li>ENT_COMPAT: デフォルト値。シングルクオートは変換し、ダブルクォートは変換しない。</li>
  <li>ENT_QUOTES: ダブルクォートもシングルクォートも変換する。</li>
  <li>ENT_NOQUOTES: ダブルクォートもシングルクォートも変換しない。</li>
</ul>

<h2>13.1.5 改行を&lt;br&gt;タグに変換する</h2>
<?php
$contents = <<<EOI
それぞれの末尾には、改行文字が入っており、
brタグは入っていませんが、nl2br()関数を使うと
HTMLでは改行を表すbrタグを挿入してくれる
EOI;
echo nl2br($contents, true);
?>

<h2>13.1.6 文字列の長さを調べる</h2>
<?php
// POSTされたデータを調べる
if (mb_strlen($_GET['text']) > 100) {
  echo 'textは100文字以内にしてください';
} else {
  echo 'textは100文字以内です';
}
?>

<?php
$str = '今日は晴れです';
echo strlen($str), PHP_EOL;
echo mb_strlen($str), PHP_EOL;
?>

<h2>13.1.7 文字列の一部を切り出す</h2>
<?php
$str = '2010年05月16日';
echo mb_substr($str, 5), PHP_EOL;
echo mb_substr($str, 5, 3), PHP_EOL;
?>

