<?php
require_once("../model/enderecoModel.php");
require_once("../model/bancoDAO.php");
require_once("../config/database.php");

$conexao = new Database();
$conn = $conexao->conectar();
$bancoDAO = new BancoDAO();
$enderecoModel = new EnderecoModel();

if (isset($_POST["buscar"])) {
    $enderecoModel->setCep($_POST['cep']);
    $bancoDAO -> getEndereco($enderecoModel, $conn);   
}


    



