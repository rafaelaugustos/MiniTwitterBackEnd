<?php

require("config.php");
require("crud.php");

$id = $_GET['id'];

// Retorno Json
$retorno = array();

$sql = read('post');
$contar = $sql->rowCount();
$retorno['qtd'] = $contar;
$n = 0;
while($ln = $sql->fetchObject()){
	$retorno['post'][$n]		= $ln->post;
	$retorno['imagem'][$n]		= $ln->imagem;
	$retorno['data_post'][$n]	= $ln->data_post;
	$n++;
}

die(json_encode($retorno));
