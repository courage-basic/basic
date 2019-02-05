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

// インスタンス作成
// ①Userクラスのインスタンスが作成され、コンストラクタに「tanaka」という文字列が引数で渡される。
$user_obj = new User("tanaka");
// ④クラス外からアロー演算子を使ってプロパティにアクセスする。
// インスタンスのプロパティ$nameに値がセットされる。
echo $user_obj->name;

$user_obj->say_hello();

// 継承クラス
class PbUser extends User {

}

// インスタンス作成
$user_obj = new PbUser("Suzuki");
echo $user_obj->name;
$user_obj->say_hello();

// staticなメソッド呼び出し
User::static_say_hello();

// インスタンス作成
$user_obj_tanaka = new User("Tanaka");
$user_obj_suzuki = new User("Suzuki");

// staticプロパティ呼び出し
echo User::$job;
echo $user_obj_tanaka::$job;
echo $user_obj_suzuki::$job;

// staticプロパティ書き換え
User::$job = "teacher";

// 書き換え後、再度staticプロパティ呼び出し
echo User::$job;
echo $user_obj_tanaka::$job;
echo $user_obj_suzuki::$job;

?>
