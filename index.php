<?php

require_once("config.php");

//Trás um usuario só
//$user = new Usuario();
//$user->loadById(1);
//echo $user;


//Carrega uma lista de usuarios
//$lista = Usuario::getList();//Static pq nao tem nenhum this (metodo poderoso)
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("Us");
//echo json_encode($search);


//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("user","12345");
//echo $usuario;


//CRIANDO UM NOVO USUARIO (INSERT)
//$aluno = new Usuario("aluno", "oioioioi");
//$aluno->insert();
//echo $aluno;


//(UPDATE)
$usuario = new Usuario();

$usuario->loadById(6);
$usuario->update("professor", "Prof0101");

echo $usuario;



?>