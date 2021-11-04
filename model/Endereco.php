<?php
require_once("banco.php");

class Endereco extends Banco {

    private $cep;
    private $logradouro;
    private $tipoLogradouro;
    private $complemento;
    private $local;
    private $idCidade;
    private $idBairro;
    private $uf;
    private $cidade;
    private $codIbge;
    private $area;

    //Metodos Set
    public function setcep($string){
        $this->cep = $string;
    }
    public function setlogradouro($string){
        $this->logradouro = $string;
    }
    public function setTipoLogradouro($string){
        $this->tipoLogradouro = $string;
    }
    public function setComplemento($string){
        $this->complemento = $string;
    }
    public function setLocal($string){
        $this->local = $string;
    }
    public function setIdCidade($string){
        $this->idCidade = $string;
    }
    public function setidBairro($string){
        $this->idBairro = $string;
    }
    //Metodos Get
    public function getCep(){
        return $this->cep;
    }
    public function getLogradouro(){
        return $this->logradouro;
    }
    public function getTipoLogradouro(){
        return $this->tipoLogradouro;
    }
    public function getComplemento(){
        return $this->complemento;
    }
    public function getLocal(){
        return $this->local;
    }
    public function getIdCidade(){
        return $this->idCidade;
    }
    public function getIdBairro(){
        return $this->idBairro;
    }


    public function incluir(){
        return $this->setEndereco($this->getCep(),$this->getLogradouro(),$this->getTipoLogradouro(),$this->getComplemento(),$this->getLocal(),$this->getIdCidade(), $this->getIdBairro());
    }
}
?>
