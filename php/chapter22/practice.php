<?php
var_dump($_SERVER['PHP_SELF']); // 場所
echo "___/___";
var_dump($_SERVER['SERVER_ADOOR']); // IPアドレス
echo "___/___";
var_dump($_SERVER['REQUEST_METHOD']); // 使用されたリクエストメソッド
 ?>

<!DOCTYPE html>
<html lang="utf-8">
<head>
    <meta charset="utf-8">
    <title>Send username</title>
</head>

<body>
    <form action="test.php" method="GET">
        <input type="text" name="last_name" placeholder="苗字を入力してください">
        <input type="text" name="first_name" placeholder="名前を入力してください">
        <input type="submit" value="送信">
    </form>
</body>
</html>
