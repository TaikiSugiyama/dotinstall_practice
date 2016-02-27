<?php

//interface-アクセス権はpublic
//抽象クラスと違い複数実装可能

interface sayHi{
	public function sayHi();
}

interface sayHello{
	public function sayHello();
}

class User implements sayHi,sayHello{
	public function sayHi(){
		echo"hi!";
	}
	public function sayHello(){
		echo"hello!";
	}
}
