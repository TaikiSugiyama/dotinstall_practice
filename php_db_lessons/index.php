<?php

define('DB_DATABASE','dotinstall_db');
define('DB_USERNAME','dbuser');
define('DB_PASSWORD','sakura39');
define('PDO_DSN','mysql:dbhost=localhost;dbname='.DB_DATABASE);

try{
	//connect
	$db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//update
        $stmt = $db->prepare("update users set score = :score where name = :name");
        $stmt->excute([
                'score'=>100,
                ':name'=>'taguchi'
        ]);
        echo 'row updated: '.$stmt->rowCount();


        //delete
        $stmt = $db->prepare("delete fron users where name = :name");
        $stmt->excute([
                ':name'=>'totinstall'
        ]);
        echo 'row deleted: '.$stmt->rowCount();
}catch(PDOException $e){
	echo $e->getMessage();
	exit;
}

