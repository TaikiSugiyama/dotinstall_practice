<?php
//真偽値判定

$x = 5;
// if($x){
if($x == true){
	echo "great";
}

$a = 3;
$b = 5;

$max = ($a>$b)? $a:$b;
//->
if($a>$b){
	$max = $a;
}else if($a<=$b){
	$max = $b;
}

?>
