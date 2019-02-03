<?php

for ($i = 1; $i <= 10; $i++){
  $sum += $i;
  echo $sum.PHP_EOL;
}

echo "/";

echo "break : そこで終了 ; ";
for ($j = 1; $j <= 10; $j++){
  if ($j == 5){
    break ;
  }
  echo $j.PHP_EOL;
}

echo "/";

echo "continue : そこだけ除外 ; ";
for ($k = 1; $k <= 10; $k++){
  if ($k == 5 ) {
    continue;
  }
  echo $k.PHP_EOL;
}

echo "/";

echo "1から100までの偶数を表示 : ";
for ($m = 0 ;$m <= 100; $m++) {
  if ($m % 2 == 1) {
    continue;
  }
  echo $m.PHP_EOL;
}

echo "/";

$array = [1, 2, 3, 4, 5];
$array_count = count($array);
for ($i = 1; $i <= $array_count; $i++) {
    echo $i.PHP_EOL;
}

?>
