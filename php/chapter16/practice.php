<?php

function say_hello($name = "Tanaka") {
  echo "Hello!".$name;
}
say_hello("Bob");
say_hello();

function say_hi($name1, $name2) {
  echo "hi,".$name1.",".$name2;
}
say_hi("Suzuki", "Tanaka");

function janken() {
  $number = rand(1,3);
  switch($number) {
    case 1:
      echo "ぐー";
      break;
    case 2:
      echo "ぱー";
      break;
    case 3:
      echo "ちょき";
      break;
    }
  }

janken();
janken();
janken();
janken();
janken();

?>
