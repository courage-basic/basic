<?php
// 連想配列
$array1 = array(
    "name" => "tanaka",
    "place" => "Osaka",
    "age" => 23
);

// 添字配列
$fruit = ["apple", "orange", "grape"];

// 多次元配列
$array2 = [
  "name" => [
    "tanaka",
    "yamada",
    "nagashima"
  ]
];

// echo $array1["name"];
// var_dump($array1);
// var_dump($array1["name"]);
//
// var_dump($fruit);
// var_dump($array2);

$array1["birthday"] = "19920816";
// print_r($array1);
// var_dump($array1);

$fruit[] = "banana";
// var_dump($fruit);

unset($array1["place"]);
// print_r($array1);

$array1["name"] = "Bob";
print_r($array1);


?>
