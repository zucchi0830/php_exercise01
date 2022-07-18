<?php

$score_math = 15;
$score_english = 24;

// ここに処理を記述
// $score_math と $scrore_englishの両方の値が60以上の時に 合格 と出力
// $score_math と $scrore_englishのどちらか一方の値が50以上の時に 再試験 と出力
// $score_math と $scrore_englishのどちらの値も50未満の時には 不合格 と出力

if ($score_math >= 60 && $score_english >= 60) {
    echo '合格';
}elseif ($score_math >= 50 || $score_english >= 50) {
    echo '再試験';
}elseif ($score_math < 50 && $score_english < 50) {
    echo '不合格';
}
