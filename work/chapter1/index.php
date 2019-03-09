<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$claim = $_POST["claim"];
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
      <input type="text" name="name" size="50" value="<?php echo $name; ?>">
      <p>メールアドレス：<br>
      <input type="text" name="mail" size="50" value="<?php echo $mail; ?>">
      <p>お問い合わせ内容：<br>
      <textarea name="claim" cols="50" rows="8" ><?php echo $claim; ?></textarea>
      <br>
      <input type="submit" name="send" value="確認">
    </form>
  </body>

  </html>
