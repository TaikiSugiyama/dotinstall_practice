<?php

namespace Dotinstall\Lib;

class User{
	public $name;
	public static $count = 0;
	public function __construct($name){
		$this->name = $name;
	}
	public function sayHi(){
		echo "hi, i am $this->name!";
	}
}


