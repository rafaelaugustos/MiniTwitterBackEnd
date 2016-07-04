<?php

require("config.php");
require("crud.php");

$id = $_GET['id'];

// Retorno Json
$retorno = array();

$sql = read('usuarios',null,"id = $id");
$ln  = $sql->fetchObject();

$retorno['nome'] 	 = $ln->nome; 
$retorno['username'] = $ln->username; 
$retorno['email'] 	 = $ln->email; 
$retorno['avatar'] 	 = $ln->avatar; 
$retorno['about'] 	 = $ln->about; 
$retorno['capa'] 	 = $ln->capa; 

die(json_encode($retorno));
