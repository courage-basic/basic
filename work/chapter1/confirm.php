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
    <p>名前：
      <?php echo $name; ?>
    <p>メールアドレス：
      <?php echo $mail; ?>
    <p>お問い合わせ内容：
      <?php echo $claim; ?>
    <br>
    <form action="index.php" method="post">
      <input type="hidden" name="name" value="<?php echo $name; ?>"/>
      <input type="hidden" name="mail" value="<?php echo $mail; ?>"/>
      <input type="hidden" name="claim" value="<?php echo $claim; ?>"/>
      <input type="submit" name="back" value="戻る">
    </form>

    <form action="execute.php" method="post">
      <input type="hidden" name="name" value="<?php echo $name; ?>"/>
      <input type="hidden" name="mail" value="<?php echo $mail; ?>"/>
      <input type="hidden" name="claim" value="<?php echo $claim; ?>"/>
      <input type="submit" name="send" value="送信">
    </form>
  </body>

  </html>
