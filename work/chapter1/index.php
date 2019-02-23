<?php
echo "hello world!";
echo "HELLO WORLD!";
?>


<!DOCTYPE HTML>
  <html lan="ja">
  <head>
    <meta charset="utf-8"></meta>
    <title>問い合わせフォーム</title>
  </head>
  <body>
    <form action="confirm.php" method="post">
      <p>名前：<br>
      <input type="text" name="name" size="50"></input>
      <p>メールアドレス：<br>
      <input type="text" name="mail" size="50"></input>
      <p>お問い合わせ内容：<br>
      <textarea name="claim" cols="50" rows="8"></textarea>
      <br>
      <button type="submit" name="send">送信</button>
    </form>
  </body>

  </html>
