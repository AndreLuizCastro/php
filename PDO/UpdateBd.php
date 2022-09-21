<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\MSSQLSERVER02;ConnectionPooling=0", "sa", "96654117and");
$conn->beginTransaction ();
$stn=$conn->prepare("UPDATE into tb_usuario (deslogin, dessenha) SET deslogin= 'eu', dessenha= '96654117and' where idusuario= '2'");

////$login= "andre";
//$password="96654117and";
//$id=1;
//$stn->bindParam(":LOGIN",$login );
//$stn->bindParam(":PASSWORD",$password );
//$stn->bindParam(":ID",$id );

$stn->execute();
$conn->commit();
echo "alterado"
?>