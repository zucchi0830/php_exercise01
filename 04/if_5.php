<?php

$num = 50;

// ここに処理を記述
// $numが素数であれば 素数です と出力
// $numが素数でない時は 素数ではありません と出力(1も素数ではありません)
$flg = true;
if ($num == 1) {
  $flg = false;
}
for ($i = 2; $i < $num; $i++) {
  if ($num % $i == 0) {
    $flg = false;
  }
}

if ($flg) {
  echo $num . "は素数です。";
} else {
  echo $num . "は素数ではありません。";
}
