<?php
require_once("../model/EnderecoModel.php");
require_once("../model/BancoDao.php");
class cadastroController {

    private $bancoDao;

    public function __construct(){
        $this->bancoDao = new BancoDao();
    }

    private function incluir(){
        $enderecoModel = new EndereçoModel();
        $enderecoModel->setCep($_POST['cep']);
        $enderecoModel->setlogradouro($_POST['logradouro']);
        $enderecoModel->setTipoLogradouro($_POST['tipoLogradouro']);
        $enderecoModel->setComplemento($_POST['complemento']);
        $enderecoModel->setLocal($_POST['local']);
        $enderecoModel->setCidade($_POST['cidade']);
        $enderecoModel->setUf($_POST['uf']);
        if($this->bancoDao->getIdCidade($enderecoModel)){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/Cadastrar.php'</script>";
            echo "Id cidade encontrado";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o endereço não está duplicado');history.back()</script>";
            echo "Id cidade não encontrado";
        }
        if($this-> bancoDao -> setEndereco($enderecoModel)){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/Cadastrar.php'</script>";
            echo "deu certo";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o endereço não está duplicado');history.back()</script>";
            echo "deu errado";
        }
    }


}

?>