<?php

require("config.php");


/* READ */
function read($table, $campos = null, $where = null, $order = null){
	global $pdo;
	$select = 'SELECT ';
	if(is_array($campos)){
		$imp = implode(', ', $campos);
		$select .= $imp;
	}elseif(is_null($campos)){
		$select .= " * ";
	}

	$select .= ' FROM '.$table.'';
	if(!is_null($where)){
		$select .= " WHERE $where";
	}

	if(!is_null($order)){
		$select .= " ORDER BY $order";
	}

	$sql = $pdo->prepare($select);
	$sql->execute();

	return $sql;
}

/* INSERT */
function insert($tabela, array $campos){
	global $pdo;
	$strInsert = "INSERT INTO ".$tabela." SET ";
	$valores = array_values($campos);
	$n = 0;
	foreach(array_keys($campos) as $i => $campo){
		$strInsert .= "".$campo." = '".$valores[$i]."'";
		$n++;
		if($n < count($valores)){
			$strInsert .= ", ";
		}
	}
	$insert = $pdo->prepare($strInsert);
	if($insert->execute()){
		return true;
	}else{
		return false;
	}
}