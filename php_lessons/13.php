<?php

//配列
//key value


// $sales = array(
// 	"taguchi" => 200,
// 	"fkoji" => 800,
// 	"dotinstall" => 600,
// 	); 


$sales = [
	"taguchi" => 200,
	"fkoji" => 800,
	"dotinstall" => 600,
	];


var_dump($sales["fkoji"]);
$sales["fkoji"] = 900;
var_dump($sales["fkoji"]);

$colors = ["red","blue","pink"];

var_dump($colors[1]);

?>
