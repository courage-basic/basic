<?php

// require "user.php";
// require "test.php";
require_once "user.php";
require_once "test.php";

use Courage\User;
use Courage\Test;

// $user_obj = new Courage\User\User("Tanaka");
// $user_obj = new Courage\Test\User("Tanaka");

$user_obj = new User\User("Tanaka");
// $user_obj = new Test\User("Tanaka");

$user_obj->say_hello();

?>
