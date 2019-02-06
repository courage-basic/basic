<?php

function say_hello($name) {
  try { // この中が例外処理
    if(empty($name)) { // この中が例外となる条件
      throw new Exception("No Name!");
    }
    echo "Hello!".$name.PHP_EOL;
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}

say_hello("");

function cal($a, $b){
  try {
    if($b == 0) {
      throw new Exception("devided by 0!");
    }
    $result = $a / $b;
    echo $result;
  } catch(Exception $e) {
    echo $e->getMessage();
  }
}

cal(12, 0);

?>
