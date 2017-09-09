<?php

require_once("config.php");

//Carrega um usuário
//$afonso = new Usuario();
//$afonso->loadbyId(2);

//echo $afonso;

//Carrega uma lista de usuários

//$lista = Usuario::getList();

//echo json_encode($lista);


//Carrega uma lista buscando pelo login

//$search = Usuario::search("af");

//echo json_encode($search);

//Carrega um usuário usando o login e a senha

$usuario = new Usuario();
$usuario->login("Afonso", "aaaa");

echo $usuario;



?>