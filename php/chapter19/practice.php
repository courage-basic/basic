<?php

 // require "user.php";
 // require_once "user.php";

 // include "user.php";
 // include_once "user.php";

spl_autoload_register(function($class) {
  require $class.".php";
});

$user_obj = new User("Tanaka");
$user_obj->say_hello();



?>
