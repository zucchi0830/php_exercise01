<?php

$stylists = [
    'スタイリスト' => 'Takashi',
    'ハイスタイリスト' => 'Ken',
    'トップスタイリスト' => 'Kyoutaro'
];
$key = '';
$msg ='';

//  ここにコードを追記
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $_POST['stylists'];
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
    <h1>希望する美容師のランクを選んでください</h1>
    <form action="" method="post">
        <select name="stylists" id="type">
            <!-- ここにコードを追記 -->
            <?php foreach ($stylists as $key => $name) :
                echo '<option value="' . $key . '">' . $key . '</option>';
            endforeach; ?>
        </select>
        <br>
        <input type="submit" value="送信">
    </form>
    <!-- ここにコードを追記 -->
    <?php foreach ($stylists as $key => $name) {
        if ($msg == $key) {
            echo "あなたの担当は{$name}です。";
        }
    } ?>
</body>

</html>
