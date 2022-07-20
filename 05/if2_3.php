<?php

$foods = [
    '朝食' => 'パン',
    '昼食' => 'うどん',
    '夕食' => 'ライス'
];
// ここに処理を記述
// 私は、
// 朝食にパン
// 昼食にうどん
// 夕食にライス
// を食べます。

echo '私は､<br>';
foreach ($foods as $time => $value) {
    echo $time . 'に' . $value . "<br>";
}
echo 'を食べます';
