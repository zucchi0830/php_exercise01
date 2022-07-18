<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

// ここに処理を記述

foreach ($subjects as $study) {
    switch ($study) {
        case '数学':
            $day = '明日';
            break;

        case '英語':
            $day = '明後日';
            break;

        case '理科':
            $day = '明々後日';
            break;

        case '社会':
            $day = '昨日';
            break;

        default:
            $day = '中止';
            break;
    }
    echo $study .'の試験は' . $day . 'です。<br>';
}
