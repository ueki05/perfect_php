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

