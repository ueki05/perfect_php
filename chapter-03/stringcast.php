<?php
// stringcast.php
if (!isset($argv[1])) {
  exit;
}

$num = $argv[1];
var_dump($num); // string
if ($num === 100) {
  echo "num is 100(int)", PHP_EOL;
} elseif ($num == 100) { // 整数で比較できる
  echo "num is 100(string)", PHP_EOL;
} else {
  echo "num is not 100", PHP_EOL;
}
