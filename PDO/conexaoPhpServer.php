<?php

//Mysql
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
//

//Sql
//$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\MSSQLSERVER02;ConnectionPooling=0", "sa", "96654117and");
//
$stmt = $conn->prepare("SELECT * FROM tb_usuario ORDER BY deslogin;");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);

?>