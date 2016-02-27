<?php

//関数

function sayHi($name = "taguchi"){
	// echo "hi!".$name;
	return "hi! ".$name;
}

// sayHi();

sayHi("Tom");
sayHi("Bob");
sayHi();

$s = sayHi();
var_dump($s);


?>

