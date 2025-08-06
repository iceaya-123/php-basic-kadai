<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>foreach文を使って連想配列の値とキーを出力しよう</title>
</head>
<body>
    <?php
    $stuff_name = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
    
    foreach ($stuff_name as $index => $value){
       echo "{$index} : {$value}<br>";
    }
    ?>
</body>
</html>