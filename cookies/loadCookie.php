<?php

if (isset($_COOKIE["teste"]))
{
    $obj = json_decode($_COOKIE["teste"]);
    echo $obj->empresa;
}

?>