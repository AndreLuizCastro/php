<?php

//$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

//SQL
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\MSSQLSERVER02;ConnectionPooling=0", "sa", "96654117and");

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = :ID");

$id = 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Delete OK!";

?>