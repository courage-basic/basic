<?php

$cal1 = 2 + 4;
echo "add:".$cal1.",","\n";

$cal2 = 9 - 2;
echo "sub:".$cal2.",";

$cal3 = 5 * 2;
echo "mul:".$cal3.",";

$cal4 = 5 ** 2;
echo "power:".$cal4.",";

$cal5 = 11 / 3;
echo "div:".$cal5.",";

$round = round($cal5,3);
echo "round:".$round.",";

$ceil = ceil($cal5);
echo "ceil:".$ceil.",";

$floor = floor($cal5);
echo "floor:".$floor.",";

$cal6 = 13 % 3;
echo "remain:".$cal6.",";
// echo $cal6.PHP_EOL;

// 単項演算子でエラーが出るぞ

$cal7 = 1;
$cal7++;
// $cal7 = $cal7 + 1;
$cal8 = 5;
$cal8--;
echo "+1です→:".$cal7.",ぬぬぬ";
echo "-1:".$cal8.",";

$cal9 = 10 + 5 * 6 / 2 - 2;
echo "job1:".$cal9.",";

$cal10 = 2 ** 11;
echo "job2:".$cal10.",";



?>
