<?php

$num = 1;

// ここに処理を記述
// $numが素数であれば 素数です と出力
// $numが素数でない時は 素数ではありません と出力(1も素数ではありません)
$flg = true;
for ($i = 2; $i < $num; $i++) {
  if ($num % $i == 0 or $num - 1 == 0) {
    $flg = false;
    break;
  }
}

if ($flg) {
  echo $num . "は素数です。";
} else {
  echo $num . "は素数ではありません。";
}
