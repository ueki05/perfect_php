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

