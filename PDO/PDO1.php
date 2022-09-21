<?php

$con =new PDO ("mysql:dbname=dbphp7; host=localhost", "root","");

$salvar = $con->prepare("SELECT * FROM tb_usuario ORDER BY deslogin");

$salvar->execute();

$resultado=$salvar->fetchAll(pdo::FETCH_ASSOC);

foreach ($resultado as $row) {

	foreach ($row as $key => $value) {

		echo "<strong>".$key."</strong>".$value."<br/>";

	}

	echo "========================================<br>";

}
?>