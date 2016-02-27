<?php

//switch 条件分岐

$signal = "green";

switch ($signal) {
	case 'red':
		echo "stop!";
		break;
	case 'blue':
	case 'green':
		echo "start!";
		break;
	case 'yellow':
		echo "caution!";
		break;
	
	default:
		echo "wrong signal";
		break;
}

?>

