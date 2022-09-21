<?php
$arquivoNome="usuarios.csv";
if (file_exists($arquivoNome))
{
    $arquivo= fopen($arquivoNome, "r");
    $headers= explode(",", fgets($arquivo));
    $dados= array();
    while($row=fgets($arquivo))
    {
        $rowData = explode(",", $row);
        $linha= array();
        for ($i= 0; $i< count ($headers); $i++)
        {
            $linha [$headers[$i]]= $rowData[$i];
        }
        array_push($dados, $linha);
    }
    fclose($arquivo);
    echo json_encode($dados);
}
?>