<?php

// $subjects = ['数学', '英語', '理科', '社会', '国語'];

// ここに処理を記述
// echo1回だけ

$subjects = [
    '数学' => '明日',
    '英語' => '明後日',
    '理科' => '明々後日',
    '社会' => '昨日',
    '国語' => '中止'
];
foreach ($subjects as $study => $day) {
    echo $study  . 'の試験は' . $day . 'です。<br>';
}
