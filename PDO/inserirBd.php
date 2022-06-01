<?php
//sql server
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\MSSQLSERVER02;ConnectionPooling=0", "sa", "96654117and");

// mysql
//$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");


$stn=$conn->prepare("INSERT into tb_usuario (deslogin, dessenha) values (:LOGIN, :PASSWORD)");
$login= "eu";
$password="81418950";
$stn->bindParam(":LOGIN",$login );
$stn->bindParam(":PASSWORD",$password );

$stn->execute();
echo "inserido"
?>