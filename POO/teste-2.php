<?php
class carro
{
private $modelo;
private $motor;
Private $ano;
private $texto;

    public function getModelo()
    {
    return $this->modelo;
    }
    public function setModelo($modelo)
    {
     $this->modelo=$modelo;   
    }

    public function getMotor()
    {
    return $this->motor;
    }
    public function setMotor($motor)
    {
     $this->motor=$motor;   
    }


    public function getAno()
    {
    return $this->ano;
    }
    public function setAno($ano)
    {
     $this->ano=$ano;   
    }

    public function exibir()
    {
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }


}
   
$gol= new carro();
$gol->setModelo("gol com escada");
$gol->setMotor("1.6");
$gol->setAno("2017");

print_r($gol->exibir());
?>