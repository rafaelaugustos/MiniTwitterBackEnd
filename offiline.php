<?php

require("config.php");
require("crud.php");

$array = array(
	'post' => $_GET['post']
);

$sql = insert('post',$array);

echo $_GET['post'];