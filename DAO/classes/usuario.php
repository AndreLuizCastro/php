<?php

class Usuario {
private $idusuario;
private $deslogin;
private $dessenha;
private $dtcadastro;

/**
 * Get the value of idusuario
 */
public function getIdusuario()
{
return $this->idusuario;
}

/**
 * Set the value of idusuario
 */
public function setIdusuario($idusuario): self
{
$this->idusuario = $idusuario;

return $this;
}

/**
 * Get the value of deslogin
 */
public function getDeslogin()
{
return $this->deslogin;
}

/**
 * Set the value of deslogin
 */
public function setDeslogin($deslogin): self
{
$this->deslogin = $deslogin;

return $this;
}

/**
 * Get the value of dessenha
 */
public function getDessenha()
{
return $this->dessenha;
}

/**
 * Set the value of dessenha
 */
public function setDessenha($dessenha): self
{
$this->dessenha = $dessenha;

return $this;
}

/**
 * Get the value of dtcadastro
 */
public function getDtcadastro()
{
return $this->dtcadastro;
}

/**
 * Set the value of dtcadastro
 */
public function setDtcadastro($dtcadastro): self
{
$this->dtcadastro = $dtcadastro;

return $this;
}

public function loadById($id){

    $sql = new Sql();

    $results = $sql->select("SELECT * FROM tb_usuario WHERE idusuario = :ID", array(

        ":ID"=>$id

    ));

    if (count($results) > 0) {

        $row = $results[0];

        $this->setIdusuario($row['idusuario']);
        $this->setDeslogin($row['deslogin']);
        $this->setDessenha($row['dessenha']);
        $this->setDtcadastro(new DateTime($row['dtcadastro']));

    }

}
public static function list()
{
    $sql = new Sql();
return $sql->select ("SELECT * FROM tb_usuario order by deslogin;");
}


public static function procura ($login)
{
    $sql = new Sql();
return $sql->select("SELECT * FROM tb_usuario WHERE deslogin like :PROCURA ORDER BY deslogin", ARRAY(
    ':PROCURA'=>"%".$login."%"));
}

public function login ($login, $senha)
{
    $sql = new Sql();
    $resultado = $sql->select("SELECT * FROM tb_usuario WHERE deslogin = :LOGIN and dessenha = :SENHA",
    array(":LOGIN"=>$login,":SENHA"=>$senha));

    if(count($resultado>0))
    {
        $row= $resultado[0]; 
        
        $this->setIdusuario($row['idusuario']);
        $this->setDeslogin($row['deslogin']);
        $this->setDessenha($row['dessenha']);
        $this->setDtcadastro(new DateTime($row['dtcadastro']));
    }
    else
    {
throw new exception("login ou senha invalidos");
    }
    
}

public function __toString(){

    return json_encode(array(

        "idusuario"=>$this->getIdusuario(),
        "deslogin"=>$this->getDeslogin(),
        "dessenha"=>$this->getDessenha(),
        "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")

    ));

}


}







?>