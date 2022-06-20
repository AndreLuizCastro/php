<?php

$arq = fopen("log.txt", "w+");

fwrite($arq, date("y-m-d h:i:s"));
fclose ($arq);
echo "arquivo criado com sucesso";
?>