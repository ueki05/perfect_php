<h1>6.1 Webアプリケーション概要</h1>
<h2>6.1.1 Webアプリケーションとは</h2>
<ul>
  <li>HTTPプロトコル</li>
  <li>リクエスト</li>
  <li>レスポンス</li>
</ul>
<h2>6.1.2 HTMLとフォーム</h2>
<?php $hour = date('H'); // 現在の時を$hour変数に格納 ?>

<?php if (5 <= $hour && $hour < 10): ?>
<p>Good morning</p>
<?php elseif (10 <= $hour && $hour < 18): ?>
<p>Hello</p>
<?php else: ?>
<p>Good evening</p>
<?php endif ?>
<p>It's <?php echo $hour; ?> o'clock now.</p>

<h2>6.1.3 HTTPメソッド</h2>
<h3>GETメソッド</h3>

<h3>POSTメソッド</h3>

