<h1>7.2 フレームワーク作成</h1>
<h2>7.2.1 フレームワークの要件</h2>
<p>今回作成するフレームワークには次の機能を実装する。</p>
<ul>
  <li>MVCモデルによる役割の分割</li>
  <li>データベースの接続管理</li>
  <li>ログイン状態の管理</li>
  <li>URLと物理的なディレクトリ構造と切り離すルーティング機能</li>
  <li>CSRF対策</li>
</ul>

<h2>7.2.2 MVCモデル</h2>
<h3>モデル</h3>
<p>アプリケーションのビジネスロジックを担う。Webアプリケーションでは主に、データベースへアクセスしてデータの取得や変更を行う機能をモデルに記述する。</p>

<h3>ビュー</h3>
<p>出力を担うのがビュー。</p>

<h3>コントローラ</h3>
<p>ユーザーのリクエストを制御し、モデルから情報を取得してビューに橋渡しするのがコントローラ。</p>

