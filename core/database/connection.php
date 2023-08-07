<?php
$dsn = 'mysql:host=localhost; dbname=tweety';
$user ='root';
$pass ='';
try{
	$pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
	echo 'connection error! ' . $e->getMessage();
}