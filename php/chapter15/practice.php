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
$c = "abcdefghijklmnopqrstuvwxyz";
echo strlen($c),"/";
echo substr($c,0,5),"/";
echo substr($c,0,-5),"/";
echo substr($c,12,8),"/";
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
echo $onlyconsonants,"/";
$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new,"/";
/// ???
$d = null;
$e = 3;
var_dump(empty($d));
var_dump(empty($e));
var_dump(isset($d));
var_dump(isset($e));
var_dump(is_array($e));
var_dump(is_array($array1));

?>
