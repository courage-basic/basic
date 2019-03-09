<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

define('DB_DATABASE', 'chapter1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '%TGB6yhn');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);

$name = $_POST["name"];
$mail = $_POST["mail"];
$claim = $_POST["claim"];
$from = "info@example.com";
$header="From: {$from}\nReply-To: {$from}\nContent-Type: text/plain;";

try {

  // connect
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// ※ここにコードを書く

  $db->beginTransaction(); // トランザクションが始まると、commit()もしくはrollback()しなければならない
  //rollback()とは、トランザクションが始まる前までなかったことにして、その下に出ることである

  $stmt = $db->prepare("insert into user (name, mail, claim) values (?, ?, ?)");
  $stmt->execute([$name, $mail, $claim]);

  $subject = "お問い合わせフォームからの送信です";
  $body = "お問い合わせ結果：
  [名前]
  $name
  [問い合わせ内容]
  $claim
  ";
  $mail_send_flag = 0;
  if( mb_send_mail($mail, $subject, $body, $header) ) {
        $mail_send_flag = 1;
  $db->commit();
        header('Location: complete.php');
        exit;
  }
  $db->rollback();

  require_once("index.php");

  } catch (PDOException $e) {
    var_dump($e);
  exit;
}
 ?>
