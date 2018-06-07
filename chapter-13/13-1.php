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

