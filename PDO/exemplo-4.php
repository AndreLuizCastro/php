<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

//SQL
//$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\MSSQLSERVER02;ConnectionPooling=0", "sa", "96654117and");

$stmt = $conn->prepare("UPDATE tb_usuario SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "João";
$password = "qwerty";
$id =2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado OK!";

?>