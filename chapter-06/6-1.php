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
<ul>
  <li>GETメソッドはデータの取得を目的としたリクエストで使用する</li>
  <li>パラメータはURLに含んだ状態で送信される</li>
  <li><strong>GETパラメータ</strong></li>
  <li>URLの長さには通常制限がある。ブラウザやサーバなどの環境によって違いはあるが、大量のデータを送信するのには向かない</li>
  <li>ブラウザのアドレス欄に直接URLを入力してアクセスした場合などもGETメソッドでのアクセスになる</li>
</ul>

<h3>POSTメソッド</h3>
<ul>
  <li>Webサーバにデータを送信する際に用いる</li>
  <li>POSTではリクエストの本文にあたるメッセージボディという箇所に格納される</li>
  <li>POSTによる送信時には、form要素のaction属性に指定したURLにGETパラメータを付与することができる</li>
</ul>

<h2>6.1.4 HTTPメソッドの使い分け</h2>
<ul>
  <li>GET: データの取得</li>
  <li>POST: データを送信して何か情報を変更させる</li>
</ul>
HTTPメソッドを適切に使い分けることはHTTPプロトコルにおける原則

