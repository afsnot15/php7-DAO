<?php

require_once("config.php");

$afonso = new Usuario();

$afonso->loadbyId(2);

echo $afonso;

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);


?>