<?php
require("config.php");
require("crud.php");

// Retorno Json
$retorno = array();


// INSERT
/*$dados = array(
	'nome' 		=> 'Lucas Silva',
	'username'  => 'Lucas',
	'email' 	=> 'lucas@gmail.com',
	'senha'		=> sha1(md5(123456))

);
$insert = insert('usuarios',$dados);*/


// READ

/*
$sql = read('usuarios');
$ln = $sql->fetchAll(PDO::FETCH_OBJ);

if($sql->rowCount() > 0){
	$retorno['success'] = 1;
	$retorno['message'] = 'Usuarios Encontrados';
	$retorno['dados']   = $ln;
}else{
	$retorno['success'] = 0;
	$retorno['message'] = 'Nenhum usuario encontrado';
}*/

// UPDATE
/*
$dados = array(
	'nome' 		=> 'Rafael Augusto',
	'username'  => 'Rafael',
	'email' 	=> 'rafael@gmail.com',
	'senha'		=> sha1(md5(123456))

);
update('usuarios',$dados,'id = 1');*/

// DELETE
delete('usuarios','id = 4');

echo "<pre>";
die(json_encode($retorno));