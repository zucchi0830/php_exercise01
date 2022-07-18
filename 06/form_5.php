<!-- XSS対策も行うこと
全ての入力項目にバリデーションを設定すること
3つの値を送信したあとに 合計値は◯◯◯です と出力 -->
<?php

$msg1 = '';
$msg2 = '';
$msg3 = '';
$err_msg = '';
$conmsg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg1 = $_POST['message1'];
    $msg2 = $_POST['message2'];
    $msg3 = $_POST['message3'];
    if (!empty($msg1 && $msg2 && $msg3)) {
        $conmsg = '合計値は' . $msg1 + $msg2 + $msg3 . 'です';
    }


    elseif (empty($msg1 && $msg2 && $msg3)) {
        $err_msg = '全てに数字を入力してください。';
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
    <h1>数字を入力してください</h1>
    <form action="" method="post">
        <?php if (!empty($err_msg)) : ?>
            <ul>
                <li><?= $err_msg ?></li>
            </ul>
        <?php endif; ?>
        <div>
            <label for="">1つめの数字</label><br>
            <input type="text" name="message1" id="">
        </div>
        <div>
            <label for="">2つめの数字</label><br>
            <input type="text" name="message2" id="">
        </div>
        <div>
            <label for="">3つめの数字</label><br>
            <input type="text" name="message3" id="">
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
