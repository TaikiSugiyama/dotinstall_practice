<?php


//名前空間

require "User.class.php";
// use Dotinstall\Lib as Lib;
use Dotinstall\Lib;

$bob = new Lib\User("Bob");
$bob->sayHi();
