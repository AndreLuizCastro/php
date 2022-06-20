<?php
require_once ("config.php");

$sql = new sql();
$usuarios = $sql->SELECT("SELECT * from tb_usuario order by deslogin");


$arquivos = array();

foreach($usuarios[0] as $key=> $value) 
{
array_push($arquivos, ucfirst($key));
}

$file =fopen("usuarios.csv","w+");
fwrite($file, implode(",", $arquivos) . "\r\n");


foreach($usuarios as $row)
{
$data= array();
    foreach ($row as $key => $value)
    {
    array_push($data, $value);
    }
    fwrite($file, implode(",", $data) . "\r\n");
}
fclose($file);

?>