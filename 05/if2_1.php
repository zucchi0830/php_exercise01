<?php

$poket_money = 1000;
$fund_raising = 101;

// ここに処理を記述
$balance = $poket_money - $fund_raising;

echo 'あなたの所持金は' . $poket_money . '円です。<br>';

while ($balance > 0) {
    echo $fund_raising . '円募金しました。<br>';
    echo '残り残高は' . $balance . '円です。<br>';
    $balance -= $fund_raising;
}
echo 'あなたはこれ以上募金できません。';
