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

<h2>7.2.3 フレームワークの構造</h2>
<h3>Request</h3>
<p>ユーザのリクエストを表すクラス。ユーザがリクエストした際のGETやPOSTパラメータ、URLなどの情報を管理する。</p>

<h3>Router</h3>
<p>ユーザがアクセスしてきたURLをRequestクラスから受け取り、どのコントローラを呼び出すかを決定する。これにより物理的なディレクトリ構造に縛られないURLの制御を可能にする。</p>

<h3>Response</h3>
<p>リクエストに対するレスポンス。最終的にユーザへ返すレスポンスの情報を管理する。</p>

<h3>DbManager</h3>
<p>データベースへの接続情報やDbRepositoryを管理するクラス。</p>

<h3>DbRepository</h3>
<p>実際にデータベースへのアクセスを伴う処理を管理するクラス。実際にはデータベース上のテーブルごとにDbRepositoryクラスの子クラスを作成する。今回のフレームワークではモデルに相当する。</p>

<h3>Controller</h3>
<p>モデルやビューの制御を行うコントローラ。今回はControllerクラスの中に<strong>アクション</strong>と呼ばれるメソッドを定義する。アクションが実際に1画面に相当する。</p>

<h3>View</h3>
<p>表示を制御するクラス。</p>

<h3>Session</h3>
<p>セッションを管理するクラス。</p>

<h3>Application</h3>
<p>アプリケーション全体を表すクラス。RequestクラスやSessionクラスの初期化、コントローラの実行などアプリケーション全体の流れを管理する。</p>
<p>アプリケーションごとにこのクラスを継承したクラスを定義し、アプリケーション固有の設定の定義を行う。</p>

<h3>ClassLoader</h3>
<p>クラスを定義したファイルを自動的に読み込むためのオートロードという仕組みを管理するクラス。</p>

<h2>7.2.4 フレームワークの処理の流れ</h2>
<p>詳しくはP202の図7.1を参照。基本的にはApplicationクラスの中で一通りの処理が完結する。RequestからResponseまでの一連の流れはApplicationクラスが制御する。まずはRequestクラスやRouterクラスの初期化を行う。</p>
<p>次にアプリケーションごとに定義されたURLとコントローラの対応をRouterクラスが読み込み、RequestクラスからURL情報を受け取って対応するコントローラを特定する。</p>
<p>アプリケーションごとのロジックを記述するのはControllerクラスやDbRepositoryクラスの部分。画面やデータベースに合わせてそれらを継承したクラスを定義する。Routerクラスによって特定されたコントローラを呼び出して、アクションを実行する。アクションの中でDbRepositoryクラスから情報を取得し、Viewクラスを通じてビューファイルに情報を渡す。ビューファイルの情報をアクションの戻り値として返し、Responseクラスに格納する。</p>
<p>最後にResponseクラスに格納された情報を出力して終了。</p>

<h2>7.2.5 ディレクトリ構成</h2>
<ul>
  <li>controllers: コントローラを配置</li>
  <li>core: フレームワークを構成するクラスを配置</li>
  <li>models: モデルを配置</li>
  <li>views: ビュー(HTMLファイル)を配置</li>
  <li>web: ドキュメントルート</li>
</ul>
<p>controllers/models/viewsディレクトリにはMVCそれぞれの役割に応じたクラスファイルやHTMLを配置する。役割に応じてディレクトリを分割しておくと管理がしやすくなるため。</p>
<p>coreディレクトリにはフレームワークのソースコードを配置する。別のアプリケーションを作成するときに必要な部分だけを持ってくれば済むようになるため。</p>
<p>webディレクトリはドキュメントルートにあたるディレクトリ。Webブラウザからアクセスする際は、このWebディレクトリ以下にあるものしかアクセスできないようにする。</p>
<p>これらのディレクトリが入っているディレクトリをアプリケーションのルートディレクトリと呼ぶことにする。</p>
<p></p>
