<?php

$msg = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $_POST['message'];
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
        <div>
            <label for="">年齢</label><br>
            <input type="text" name="message" id="">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <div>
        <?php if (!empty($msg)) : ?>
            <?= htmlspecialchars('私は' . $msg . '歳です', ENT_QUOTES, 'UTF-8') ?>
        <?php endif; ?>
    </div>
</body>

</html>
