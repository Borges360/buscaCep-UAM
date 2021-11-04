<?php

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setEndereco($cep, $logradouro, $tipoLogradouro, $complemento, $local, $idCidade, $idBairro, $uf, $cidade, $codIbge, $area){
        $stmt = $this->mysqli->prepare("INSERT INTO `endereco` (`cep`, `logradouro`, `tipoLogradouro`, `complemento`, `local`, `idCidade`, `idBairro`) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss",$cep,$logradouro,$tipoLogradouro,$complemento,$local,$idCidade,$idBairro);
         $stmt = $this->mysqli->prepare("INSERT INTO `cidade` (`idCidade`, `uf`, `cidade`, `codIbge`, `area`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$idCidade,$uf,$cidade,$codIbge,$area);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getEndereco($cep){
        $result = $this->mysqli->query("SELECT * FROM `endereco` LEFT JOIN (`cidade`)
                 ON (endereco.ID_CIDADE = cidade.ID_CIDADE)
                 where endereco.CEP = '".$cep."';");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteLivro($cep){
        if($this->mysqli->query("DELETE FROM `livros` WHERE `nome` = '".$id."';") == TRUE){
            return true;
        }else{
            return false;
        }

    }

    public function updateLivro($nome,$autor,$quantidade,$preco,$flag,$data,$id){
        $stmt = $this->mysqli->prepare("UPDATE `livros` SET `nome` = ?, `autor`=?, `quantidade`=?, `preco`=?, `flag`=?,`data` = ? WHERE `nome` = ?");
        $stmt->bind_param("sssssss",$nome,$autor,$quantidade,$preco,$flag,$data,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>
