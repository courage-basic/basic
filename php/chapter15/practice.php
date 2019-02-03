<?php

$a = 3.54321;

echo ceil($a),"/";
echo floor ($a),"/";
echo round ($a,4),"/";
echo rand(1,1000),"/";
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza); // 配列へ
var_dump($pieces);
echo "/";
$array1 = ["a","b","c","d"];
echo implode(":", $array1),"/";
$b = "  kk      ";
echo $b,"/";
echo trim($b),"/";
$c = "kajdfkjajfaljdfkljaldjfafiwpupwia";
echo strlen($c);

?>
