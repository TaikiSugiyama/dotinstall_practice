<?php

define('DB_DATABASE','dotinstall_db');
define('DB_USERNAME','dbuser');
define('DB_PASSWORD','sakura39');
define('PDO_DSN','mysql:dbhost=localhost;dbname='.DB_DATABASE);

try{
	//connect
	$db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	//$stmt->db->prepare("insert into users (name, score) values(?,?)");
	//$stmt->execute(['sugiyama',44]);
	$stmt->db->prepare("insert into users (name, score) values(:name,:score)");
        $stmt->execute([':name' =>'sato',':score'=>80]);
	echo "inserted: ".$db->lastInsertId();	

}catch(PDOException $e){
	echo $e->getMessage();
	exit;
}

