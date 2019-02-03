<?php

// 連想配列
  $array1 = [
    "name" => "tarou",
    "age" => "26",
    "place" => "東京都"
  ];

// 添字配列
  $array2 = ["りんご", "ぶどう", "バナナ"];

foreach($array2 as $value) {
    echo $value.PHP_EOL;
}

foreach($array1 as $key => $value) {
  // echo $key.":".PHP_EOL;
  echo $value.PHP_EOL;
}

 $array3 = ["a","b","c","d","e","f","g","h","i","j","k"];
 foreach ($array3 as $value){
      if ($value == "g"){
        $str1 = $value;
      }
      if ($value == "i"){
        $str2 = $value;
      }
      if ($value == "f"){
        $str3 = $value;
      }
 }
 echo $str1.$str2.$str3;

 $array4 = [
   "name" => "田中太郎",
   "age" => 30,
   "gender" => "male",
   "from" => "埼玉県"
 ];

print_r($array4);
$array5 = [];
foreach ($array4 as $key => $value) {
// foreach ($array4 as $key => $value) {
    if ($key == "name" or $key == "age") {
      $array5[$key] = $value;
    }
}
print_r($array5);

$array = [
    "name"   => "田中太郎",
    "age"    => 30,
    "gender"=> "male",
    "from"  => "埼玉県"
];
$return_array = [];
foreach ($array as $key => $value) {
    if ($key == "name" or $key == "age") {
        $return_array[$key] = $value;
    }
}

print_r($return_array);

?>
