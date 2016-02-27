<?php

//関数
//ローカル変数
$lang = "ruby";

function sayHi($name){
	$lang = "php";
	echo "hi! $name form $lang";
}

sayHi("Tom");
var_dump($lang);

