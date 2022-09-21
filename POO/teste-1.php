<?php
class Pessoa
{
    public $nome;
    public function falar()
    {
        return " o meu nome é ".$this->nome;
    }
}

$andre =  new pessoa();
$andre->nome = "andre luiz";
echo $andre->falar();


?>

