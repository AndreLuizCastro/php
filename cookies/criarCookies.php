<?php

$dados = array("empresa"=> "infotech");
setcookie("teste", json_encode($dados), time() +3600);


?>