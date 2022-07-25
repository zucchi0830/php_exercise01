<?php

$judge_ment = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'get') {
    $judge_ment = $_GET['jundge_ment'];
    if (empty($judge_ment)) {
        $err_msg = '点数が入力されていません。';
    }
    if ($judge_ment) {
        // thankyou.phpにリダイレクト
        header('Location: 03_judge_ment.php');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <!-- //ここにコードを追記 -->
    <?php if (empty($judge_ment)) : ?>
        <h1>点数を入力してください</h1>
    <?php endif; ?>

    <?php if (!empty($err_msg)) : ?>
        <ul>
            <li><?= $err_msg ?></li>
        </ul>
    <?php endif; ?>
    <form action="03_judge_ment.php" method="get">
        <input type="number" name="judge_ment">
        <input type="submit" value="送信">
    </form>
</body>

</html>
