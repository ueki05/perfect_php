<h1>レガシーPHPからの脱却</h1>
<h2>6.3.1 レガシーPHPコード</h2>
<p>リクエストからデータベースへ保存する処理、データベースから投稿された内容を取得して表示する処理など、全ての処理がbbs.phpに詰まっている。</p>

<h3>レガシーPHPとは</h3>
<p>HTML中にプログラムを記述できることはPHPの一番の特徴と言っても良い。</p>
<p>なんでもHTML中に埋め込もうとすると、メンテナンス性や拡張性の低下など、後々様々なデメリットに繋がる。</p>
<p>レガシーとは、新しいものや考え方が現れたため、古くなって使われないようなものを指す。HTML中に何でも書くようなコードはもはやレガシーと言ってよい。</p>

<h3>課題と改善</h3>
<p>HTML中に様々な処理が記述されている点。HTML中には表示に関する必要最低限の処理のみを記述し、PHPでの処理部分は1箇所にまとめるようにする。</p>
<p>1つのファイルに全ての処理が入っている点。ファイルを分割する。</p>

<h2>6.3.2 ロジックとビューを分離</h2>
<p>SQL文を実行してデータベースから結果を取得する処理と、取得結果を表示する処理が同時に行われている。それらを分離し、HTMLを表示する前の箇所で行うよう変更する。</p>

<h3>ロジックとビュー</h3>
<p>ロジック: 表示するために必要な情報を取得したり、保存処理のように情報を操作したりする処理</p>
<p>ビュー: 実際に表示を行う処理</p>
<p>これらの役割を適切に分離することにより、メンテナンス性や可読性の向上に繋がる。</p>

<h3>結果の取得</h3>
<p>SQL文の実行結果をその場で出力するのではなく、事前に配列に格納するよう修正する。表示処理では配列に格納された値を使えばよいし、事前に取得してしまえばデータベースとの接続を閉じても問題ない。</p>

<h3>取得結果の表示</h3>
<p>$posts変数にデータベースから取得したコメントの情報が配列で含まれている。これを用いて表示するよう修正する。</p>

