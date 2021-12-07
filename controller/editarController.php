<?php
require_once("../model/enderecoModel.php");
require_once("../model/bancoDAO.php");
require_once("../config/database.php");

$conexao = new Database();
$conn = $conexao->conectar();
$bancoDAO = new BancoDAO();
$enderecoModel = new EnderecoModel();

if (isset($_POST["atualizar"])) {
    $enderecoModel->setCep($_POST['cep']);
    $enderecoModel->setlogradouro($_POST['logradouro']);
    $enderecoModel->setTipoLogradouro($_POST['tipoLogradouro']);
    $enderecoModel->setComplemento($_POST['complemento']);
    $enderecoModel->setLocal($_POST['local']);
    $enderecoModel->setCidade($_POST['cidade']);
    $enderecoModel->setUf($_POST['uf']);
    $bancoDAO -> getIdCidade($enderecoModel, $conn);
    $bancoDAO -> updateCep($enderecoModel, $conn);   
}