<?php

//抽象クラス

abstract class BaseUser{
	public $name;
	abstract public function sayHi();
}

class User extends BaseUser{
	public function sayHi(){
		echo "hello from User";
	}
}
