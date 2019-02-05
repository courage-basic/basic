<?php

class User {
    // プロパティ定義
    public $name;

    // staticなプロパティ定義
    public static $job = "engineer";

    // コンストラクタ
    // ②コンストラクタが呼び出され、$user_nameに「tanaka」という文字列が代入される。
    public function __construct($user_name) {
      // プロパティセット
      // ③作成したインスタンスのプロパティ$nameにアクセスして、$user_name(つまりtanakaという文字列)を代入する。
      $this->name = $user_name;
      // $nameだが、クラス内では「$this->」をつけて定義する
    }

    // メソッド定義
    public function say_hello() {
      echo "Hello!".$this->name.PHP_EOL;
    }

    // staticなメソッド定義
    public static function static_say_hello(){
        echo "Hello! from static method!".PHP_EOL;
    }
}


?>
