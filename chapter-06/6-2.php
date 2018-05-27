<h1>6.2 ひとこと掲示板作成</h1>
<h2>6.2.1 アプリケーション概要</h2>
ひとこと掲示板を作成する。実装する機能は以下の通り。
<ul>
  <li>コメントの投稿</li>
  <li>投稿されたコメントの一覧</li>
</ul>

<h2>6.2.2 データベースの作成</h2>
<p>今回はoneline_bbsデータベースを作成する。</p>
<p>CREATE DATABASE `oneline_bbs` DEFAULT CHARACTER SET utf8;</p>

<h2>6.2.3 テーブルの作成</h2>
<ul>
  <li>id: 数値の連番(主キー)</li>
  <li>name: 投稿者名</li>
  <li>comment: コメント</li>
  <li>creted_at: 投稿日時</li>
</ul>
<p>
CREATE TABLE `post` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(40),
  `comment` VARCHAR(200),
  `created_at` DATETIME,
  PRIMARY KEY(id)
) ENGINE = INNODB;
</p>

<h2>6.2.4 アプリケーションを配置するディレクトリの作成</h2>
oneline_bbsディレクトリを作成

<h2>6.2.5 コメント投稿フォームの作成</h2>
bbs.phpにコメント投稿機能を作成

<h2>6.2.6 保存処理</h2>
<p>データベースに保存する処理を追加する</p>
<p>処理の流れ</p>
<ol>
  <li>MySQLに接続し、oneline_bbsデータベースを選択する</li>
  <li>エラーを格納する$errors変数を初期化する</li>
  <li>リクエストメソッドがPOSTか判定する</li>
  <li>入力された内容のバリデーションを行う</li>
  <li>バリデーションエラーがないか判定する</li>
  <li>SQLのINSERT文を作成する</li>
  <li>SQLを実行し、保存を行う</li>
</ol>

<h3>データベースに接続</h3>
<p><strong>mysql_connect()関数</strong>を使う。MySQLサーバのホスト名、ユーザ名、パスワードを指定する。正しく接続できた場合、接続を表すresource型の値が返される。接続できない場合はfalseが返されるため、それを判定して処理を中断する。</p>
<p>取得した値を元に<strong>mysql_select_db()関数</strong>を呼び出して、oneline_bbsデータベースを選択する。</p>

<h3>HTTPメソッドの判定</h3>
<p>原則として、データの保存はPOSTメソッドを利用する。HTML側でform要素のmethod属性にpostを指定し、処理をするPHP側でも必ず判定を行う。</p>
<p>リクエストされたメソッドは$_SERVER['REQUEST_METHOD']に大文字の文字列で格納される。</p>

<h3>バリデーション</h3>
<p>フォームから送信された値がアプリケーションが期待する値に沿っているかをチェックすること。よく行うバリデーションには次のようなものがあげられる。</p>
<ul>
  <li>入力されているか</li>
  <li>文字列の長さが適切な範囲に収まっているか</li>
  <li>数値が入力されているか</li>
  <li>選択された値が項目として存在しているか</li>
  <li>データベース上にすでに登録されている値か</li>
  <li>URLなど特定の形式に則っているか</li>
</ul>
<p>ここでは、isset()やstrlen()関数を用いてバリデーションを行っている。</p>

<h3>SQL文の作成とSQLインジェクション対策</h3>
<p>mysql_real_escape_string()関数を使用する。</p>

<h3>SQL文の実行</h3>
<p>mysql_query()関数を用いる。</p>

<h2>6.2.7 エラーメッセージ出力</h2>
<p>count()関数を用いて$errors変数にエラーメッセージがh組まれているかをチェック</p>

<h3>HTML特殊文字のエスケープ</h3>
<p>htmlspecialchars()関数でエスケープ処理を行うことで、クロスサイトスクリプティング等の脆弱性対策。</p>
<p><a href="http://php.net/manual/ja/function.htmlspecialchars.php">http://php.net/manual/ja/function.htmlspecialchars.php</a></p>

<p>基本的にはエスケープ処理を行い、エスケープしたくない場所ではエスケープ処理をしないようにする」という考えでプログラムを作ることがセキュアなWebアプリケーションを作る上で必要。</p>

