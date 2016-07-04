<?php
	header("Access-Control-Allow-Origin: *");
	date_default_timezone_set('America/Sao_Paulo');
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=twitter','root','root');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo 'ERROR: ' . $e->getMessage();
	}
	