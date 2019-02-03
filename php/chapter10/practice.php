<?php

// $score = 90;
$score = 70;

if($score >= 80){
    echo $score;
}
else{
    echo "too low!";
}

if($score != 90){
  echo "not 90!";
}

$a = 19;

// $b = ($a % 2 === 0) ? "偶数である":"奇数である";
($a % 2 === 0) ? $b = "偶数である": $b = "奇数である";
echo $a."は".$b;

?>
