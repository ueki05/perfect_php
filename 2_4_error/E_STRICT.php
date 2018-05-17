<?php

echo 'test start', PHP_EOL;

// E_STRICTが出るはずだけど、今のローカルの設定だと出ない
class foo {
  public function __construct() {}
  public function foo() {}
}

echo 'test finish', PHP_EOL;
