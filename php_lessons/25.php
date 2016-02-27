<?php

//require: fatal error
//require_once

require "User.class.php";

//include: warning
//include_once

//autoload

spl_autoload_register(function($class){
	require $class. ".class.php";
});

$bob = new User("Bob");
$bob->sayHi();
