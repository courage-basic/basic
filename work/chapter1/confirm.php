<?php
define('DB_DATABASE', 'user');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '%TGB6yhn');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);

try {
  // connect
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// ※ここにコードを書く
  // var_dump ("test");
  // $name = $_POST["name"];
  // $mail = $_POST["mail"];
  // $claim = $_POST["claim"];
  //
  // $stmt = $db->prepare("insert into user (name, mail, claim) values (?, ?, ?)");
  // $stmt->execute([$name, $mail, $claim]);

} catch (PDOException $e) {
  // $db->rollback();
  // echo $e->getMessage();
    var_dump($e);
  exit;
}

?>

<!DOCTYPE HTML>
  <html lan="ja">
  <head>
    <meta charset="utf-8"></meta>
    <title>問い合わせフォーム</title>
  </head>
  <body>
    <form action="" method="post">
      <p>名前：<br>
        <?php echo $name; ?>
      <p>メールアドレス：<br>
        <?php echo $mail; ?>
      <p>お問い合わせ内容：<br>
        <?php echo $claim; ?>
      <br>
      <button type="submit" name="send">送信</button>
    </form>
  </body>

  </html>
