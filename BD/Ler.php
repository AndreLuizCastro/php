<?php

$con = new mysqli ("localhost", "root", "" , "dbphp7");

if ($con->connect_error){
    echo "Error : ", $con->connect_error;
}

$busca = $con->query("SELECT * FROM tb_usuario ORDER BY deslogin");

$datas = array();

while ($row = $busca->fetch_assoc())
{ 
    array_push($datas, $row);
}
echo json_encode($datas);
?>