<?php
    $judge_ment = $_GET['jundge_ment'];
    ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- 点数が60以上の場合、合格 と出力,点数が60未満の場合、不合格 と出力 -->
    <?php if ($judgement >= 60) : ?>
        <?= "<h1>合格です</h1>" ?>
    <?php else : ?>
        <?= "<h1>不合格です</h1>" ?>
    <?php endif; ?>

    <a href="03_form2.php">戻る</a>
</body>

</html>
