<?php

require_once __DIR__ . '/05_functions.php';

$msg = '';
$today = date('Y年m月d日');
$week = [
    '日', //0
    '月', //1
    '火', //2
    '水', //3
    '木', //4
    '金', //5
    '土', //6
];
$day_of_week = date('w');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // コードを追記
    $button = $_POST['yes'];
    $msg = "今日は、{$today}" . "{$week[$day_of_week]}曜日です。";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (empty($button)) : ?>
        <h2>本日の日付、曜日を確認しますか?</h2>
    <?php endif; ?>
    <?php if ($msg) : ?>
        <h1><?= $msg ?></h1>
    <?php endif; ?>
    <?php if (empty($button)) : ?>
        <form action="" method="post">
            <input type="submit" value="はい" name="yes">
        </form>
    <?php else : ?>
        <a href="05_main.php">戻る</a>
    <?php endif; ?>
</body>

</html>
