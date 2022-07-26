<?php

$name = '';
$tel = '';
$email = '';
$item_key = '';
$err_msgs = [];
$msg_item = '';

$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $msg_item = $_POST['item'];

    if (empty($name)) {
        $err_msgs[] = '年齢が入力されていません。';
    }
    if (empty($tel)) {
        $err_msgs[] = '電話番号が入力されていません。';
    }
    if (empty($email)) {
        $err_msgs[] = 'メールアドレスが入力されていません。';
    } 
    if (!empty($name && $tel && $email)) {
        // 05_confirm.phpにリダイレクト
        header('Location: 05_confirm.php?purchase_item=' . $msg_item);
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
    <title>Document</title>
</head>

<body>
    <h3>個人情報を入力してください</h3>
    <?php if (!empty($err_msgs)) : ?>
        <h2>エラーメッセージ</h2>
        <ul>
            <?php foreach ($err_msgs as $err_msg) : ?>
                <li><?= $err_msg ?></li>
            <?php endforeach; ?>
        </ul>

    <?php endif; ?>
    <form action="" method="post">
        氏名<br>
        <input type="text" name="name"><br>
        電話番号<br>
        <input type="text" name="tel"><br>
        メールアドレス<br>
        <input type="text" name="email"><br>
        <p>
        <h3>購入するものを選択してください</h3>
        </p>
        <p>
            <select name="item" id="type">
                <!-- ここにコードを追記 -->
                <?php foreach ($items as $item_key) :
                    echo '<option value="' . $item_key . '">' . $item_key . '</option>';
                endforeach; ?>
            </select>
        </p>
        <div class="submit">
            <input type="submit" value="送信">
        </div>
    </form>
    <!-- // コードを追記 -->
    <?php if ($name && $tel && $email != "") : ?>
        <p>
        <h3>以下の内容が送信されました。</h3>
        <!-- 氏名 電話番号 メールアドレス 購入するもの -->
        <?= "氏名: $name <br>";  ?>
        <?= "電話番号: $tel <br>";  ?>
        <?= "メールアドレス: $email <br>";  ?>
        <?php foreach ($items as $item_key) :
            if ($msg_item == $item_key) {
                echo "購入するもの: $item_key <br>";
            }
        endforeach; ?>
        </p>
    <?php endif; ?>


</body>

</html>
