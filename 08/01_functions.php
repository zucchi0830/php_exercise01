<?php

// '朝' or '昼' or '夜'を指定
$time_zone = '夜';

function get_greeting($time_zone)
{
    $greetings = [
        '朝' => 'おはよう',
        '昼' => 'こんにちは',
        '夜' => 'こんばんは'
    ];
    // コードを追記
    foreach ($greetings as $key => $value) {
        if($time_zone == $key){
            echo "{$key}の挨拶は{$value}";
        }
    }
}
