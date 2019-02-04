<?php

// 時間帯(朝 or 昼 or 夜)
// $time_zone = "morning";
// $time_zone = "afternoon";
$time_zone = "night";

// 時間帯ごとに挨拶を変えて表示する
// 「初期値」と比較して、あってるかどうかのざっくり判定

switch ($time_zone) {
    case ("morning"):
        echo "おはよう".PHP_EOL;
        break;
    case ("afternoon"):
        echo "こんにちは".PHP_EOL;
        break;
    case ("night"):
    case ("evening"):
        echo "こんばんは".PHP_EOL;
        break;
    default:
        echo "おっす".PHP_EOL;
        break;
}

$score = 65;
echo $score;
switch ($score) {
    case(80):
      echo "very good!".PHP_EOL;
      break;
    case(65):
      echo "good!".PHP_EOL;
      break;
    case(0):
      echo "bad...".PHP_EOL;
      break;
}


?>
