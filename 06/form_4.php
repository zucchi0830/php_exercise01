<!-- num1とnum2には計算させる値を指定。値は変更可能。
operatorには
additionを指定したら足し算、
subtractionを指定したら引き算
multiplicationを指定したら掛け算
divisionを指定したら割り算
を行う
上記以外を指定した場合は、 正しい演算子を指定して下さい と出力 -->

<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$keywords = $_GET['operator'];

if ($keywords == 'addition') {
    echo "$num1 + $num2 = " . $num1 + $num2;
} elseif ($keywords == 'subtraction') {
    echo "$num1 - $num2 = " . $num1 - $num2;
} elseif ($keywords == 'multiplication') {
    echo "$num1 * $num2 = " . $num1 * $num2;
} elseif ($keywords == 'division') {
    echo "$num1 / $num2 = " . $num1 / $num2;
} else {
    echo '正しい演算子を指定して下さい';
}
