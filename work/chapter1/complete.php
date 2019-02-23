<!DOCTYPE HTML>
  <html lan="ja">
  <head>
    <meta charset="utf-8"></meta>
    <title>問い合わせフォーム</title>
  </head>
  <body>
    <?php
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $claim = $_POST["claim"];

    var_dump ($name);
    var_dump ($mail);
    var_dump ($claim);

    if(
        mb_send_mail($mail, "お問い合わせフォームからの送信です", "お名前：".$name."お問い合わせ内容：".$claim."お問い合わせ結果："."結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果結果")
      )  {
            echo "メールを送信しました";
         } else {
            echo "メールの送信に失敗しました";
           };
      ?>
    </body>
  </html>
