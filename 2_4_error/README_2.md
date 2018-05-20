## 2章 PHPの基本
### 2.1 基本的な構文
#### 2.1.2 PHPブロック
##### 終了タグの省略
「PHPブロックで修了するファイル」ではPHPブロックの終了タグを省略することができる。
省略できる、と言うより、むしろ「PHPのみ記述されたファイル」、すなわち、ライブラリや、HTMLを含まないファイルなどは、多くの場合終了タグを記述しないことを推奨している。
「PHPブロック以外は文字列として出力される」というPHPの仕様に起因する副作用を防ぐため。
```php
// ... ライブラリ本体

?>



```
ファイルの末尾が複数の改行を含んでいる場合、このPHPファイルをクラスなどを利用する目的で読み込んだとき、読み込みだけを行うつもりでもブロックの戸川にある改行が意図せず出力されてしまう。

### 2.2 変数
#### 2.2.5 スーパーグローバル変数
| 変数名 | 意味 |
| :----- | :--- |
| $GLOBALS | すべてのグルーバル変数への参照を持つ連想配列 |
| $_SERVER | スクリプトのヘッダ、パスなどの情報を持つ連想配列 |
| $_GET | 現在のスクリプトの渡されたURLパラメータの連想配列 |
| $_POST | 現在のスクリプトにHTTP POSTで渡された変数の連想配列 |
| $_FILES | 現在のスクリプトにアップロードされたファイルの情報を持つ配列 |
| $_COOKIE | HTTPクッキーから渡された変数の連想配列 |
| $_REQUEST | $_GET、$_POST、$_COOKIEをまとめた連想配列 |
| $_SESSION | 現在のスクリプトで使用できるセッション変数 |
| $_ENV | 現在実行されている環境変数の連想配列 |

### 2.4 エラー
#### 2.4.4 エラーに関する設定
- error_reporting
  - エラーのうち、どのエラーを報告するか指定する設定
- display_errors
  - 発生したエラーを表示するかどうかを制御
- log_errors
  - エラーをログに出力するかどうかを制御
- error_log
  - ログのファイル名を指定