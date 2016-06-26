<?php
require("config.php");
require("crud.php");

// Retorno Json
$retorno = array();

/*$dados = array(
	'nome' 		=> 'Lucas Silva',
	'username'  => 'Lucas',
	'email' 	=> 'lucas@gmail.com',
	'senha'		=> sha1(md5(123456))

);
$insert = insert('usuarios',$dados);*/


// Leitura de usuarios
$sql = read('usuarios');
$ln = $sql->fetchAll(PDO::FETCH_OBJ);

if($sql->rowCount() > 0){
	$retorno['success'] = 1;
	$retorno['message'] = 'Usuarios Encontrados';
	$retorno['dados']   = $ln;
}else{
	$retorno['success'] = 0;
	$retorno['message'] = 'Nenhum usuario encontrado';
}

echo "<pre>";
die(json_encode($retorno));