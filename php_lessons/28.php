<?php
$username = '';
$err = false;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$username = $_POST['username'];
	
	if(strlen($username)>8){
		$err = true;
	}
}
?>

<!DOCTYPE html>
<html lang ja="ja">
<head>
	<meta charset = "utf-8">
	<title>Check username</title>
</head>
<body>
	<form action ="" method="POST">
		<input type="text" name="username" placeholder="user name"
		value="<?php echo htmlspecialchars($username, ENT_QUOTES,'UTF-8');?>">
		<input type="submit" value="Check!">
		<?php if ($err){ 
			echo "Too long!"; 
		}?>
	</form>
</body>
</html>

