<?php

$con = new mysqli ("localhost", "root", "" , "dbphp7");

if ($con->connect_error){
    echo "Error : ", $con->connect_error;
}

$salvar= $con->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES (?,?)");
$salvar->bind_param("ss",$login, $pass);
$login="andre";
$pass= "123456";
$salvar-> execute();

$login="alan";
$pass= "654321";
$salvar-> execute();
?>