<?php 
$cep ="79370000";
$link= "https://viacep.com.br/ws/$cep/json/";

$key = curl_init($link);

curl_setopt($key, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($key, CURLOPT_SSL_VERIFYPEER, 0);
$resposta = curl_exec($key);
curl_close($key);
$dados= json_decode($resposta,true);
print_r($dados);
?>