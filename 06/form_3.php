<?php

$msg = '';
$err_msg = '';
$conmsg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $_POST['message'];
    $conmsg = '私は' . $msg . '歳です';

    if (empty($msg)) {
        $err_msg = '年齢を入力してください。';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームの練習</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="post">
        <?php if (!empty($err_msg)) : ?>
            <ul>
                <li><?= $err_msg ?></li>
            </ul>
        <?php endif; ?>
        <div>
            <label for="">年齢</label><br>
            <input type="text" name="message" id="">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <div>
        <?php if (empty($err_msg)) : ?>
            <?= htmlspecialchars($conmsg, ENT_QUOTES, 'UTF-8') ?>
        <?php endif; ?>
    </div>
</body>

</html>
