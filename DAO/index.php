<?php

require_once("config.php");
//carrega um usuario
//$root = new Usuario();
//$root->loadbyId(2);
//echo $root;

//$sql = new sql();
//$usuario = $sql -> select ("SELECT * FROM tb_usuario");
//echo json_encode($usuario);

//carrega uma lista de usuarios
//$lista = USUARIO::list();
//echo json_encode($lista);

//carrega um lisa de usuario pelo login
//$procura= USUARIO::procura("a");
//echo json_encode($procura);

//login e senha
//$usuario = new USUARIO();
//$usuario->login("andre","81418950");
//echo $usuario;

//criando novo usuario
//$aluno = new Usuario("mauricio", "124578369");
//$aluno->insertBD();
//echo $aluno;

//alterar usuario
//$usuario = new usuario();
//$usuario->loadbyId(4);
//$usuario->alterar("andre","784512");
//echo $usuario;

//deletar usuario
$usuario = new usuario();
$usuario->loadbyId(5);
$usuario->delete();
echo $usuario
?>