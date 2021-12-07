<?php

class BancoDAO {

    public function setEndereco($enderecoModel, $conn){
        try{
            $query = 'INSERT INTO endereco (cep, logradouro, tipo_logradouro, complemento, local, id_cidade) VALUES (:cep, :logradouro, :tipo_logradouro, :complemento, :local, :id_cidade)';
            $prepare = $conn->prepare($query);
            $prepare->bindValue(':cep', str_replace(array('.', '-', ' '), '', $enderecoModel->getCep()), PDO::PARAM_STR);
            $prepare->bindValue(':logradouro', $enderecoModel->getLogradouro(), PDO::PARAM_STR);
            $prepare->bindValue(':tipo_logradouro', $enderecoModel->getTipoLogradouro(), PDO::PARAM_STR);
            $prepare->bindValue(':complemento', $enderecoModel->getComplemento(), PDO::PARAM_STR);
            $prepare->bindValue(':local', $enderecoModel->getLocal(), PDO::PARAM_STR);
            $prepare->bindValue(':id_cidade',$enderecoModel->getIdCidade(), PDO::PARAM_INT);
            $prepare->execute();
            echo "<script>alert('Cadastrado com sucesso!')</script>";

        }catch(PDOException $e){
            echo "Erro ao inserir: " . $e->getMessage();
        }
    }

    public function getEndereco($enderecoModel, $conn){
        try {
            $query = 'SELECT logradouro, tipo_logradouro, complemento, local, uf, cidade  FROM endereco LEFT JOIN cidade ON (endereco.id_cidade = cidade.id_cidade) WHERE cep = :cep';
            $prepare = $conn->prepare($query);
            $prepare->bindValue(':cep', $enderecoModel->getCep(), PDO::PARAM_STR);
            $prepare->execute();
            $row = $prepare->fetch(PDO::FETCH_ASSOC);
            $enderecoModel -> setlogradouro($row['logradouro']);
            $enderecoModel -> setTipoLogradouro($row['tipo_logradouro']);
            $enderecoModel -> setComplemento($row['complemento']);
            $enderecoModel -> setLocal($row['local']);
            $enderecoModel -> setUf($row['uf']);
            $enderecoModel -> setCidade($row['cidade']);
            echo "<!DOCTYPE html>";
            echo "<html lang='pt-br'>";
            echo "<head>";
            echo "    <meta charset='UTF-8'>";
            echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
            echo "    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>";
            echo "    <link rel='stylesheet' href='../view/style.css'>";
            echo "    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>";
            echo "    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>";
            echo "    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>";
            echo "</head>";
            echo "<body>";
            echo "  <div id='header'></div>";
            echo "    <fieldset>";
            echo "        <div class='form-group'>";
            echo "                <h1 style='color: #fff; padding-bottom: 5%;'>Resultado</h1>";
            echo "<table class='table table-dark' style='text-align: left;'>";
            echo "<tr>";
            echo "<td>Cep</td>";
            echo "<td>" . $enderecoModel->getcep() . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Logradouro</td>";
            echo "<td>" . $enderecoModel->getLogradouro() . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Tipo Logradouro</td>";
            echo "<td>" . $enderecoModel->getTipoLogradouro() . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Complemento</td>";
            echo "<td>" . $enderecoModel->getComplemento() . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Local</td>";
            echo "<td>" . $enderecoModel->getLocal() . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Uf</td>";
            echo "<td>" . $enderecoModel->getUf() . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Cidade</td>";
            echo "<td>" . $enderecoModel->getCidade() . "</td>";
            echo "</tr>";
            echo "</table>";
            echo "        </div>";
            echo "    </fieldset>";
            echo "</body>";
            echo "</html>";
        } catch (PDOException $e) {
            echo "Erro ao consultar id cidade " . $e->getMessage();
        }           
    }

    function getIdCidade($enderecoModel, $conn){
        
        try {
            $query = 'SELECT id_cidade FROM cidade WHERE uf = :uf AND cidade = :cidade';
            
            $prepare = $conn->prepare($query);

            $prepare->bindValue(':uf', $enderecoModel->getUf(), PDO::PARAM_STR);
            $prepare->bindValue(':cidade', $enderecoModel->getCidade(), PDO::PARAM_STR);

            $prepare->execute();
            
            $enderecoModel -> setIdCidade($prepare->fetch(PDO::FETCH_ASSOC)['id_cidade']);
        } catch (PDOException $e) {
            echo "Erro ao consultar id cidade " . $e->getMessage();
        }    

    }

    public function deleteCep($enderecoModel, $conn){
        try {
            $query = 'DELETE FROM endereco WHERE cep = :cep';
            $prepare = $conn->prepare($query);
            $prepare->bindValue(':cep', str_replace(array('.', '-', ' '), '', $enderecoModel->getCep()), PDO::PARAM_STR);
            $prepare->execute();
            echo "<script>alert('Exclusão realizada com sucesso!')</script>";
        } catch (PDOException $e) {
            echo "Erro ao consultar id cidade " . $e->getMessage();
        }    
    }

    public function updateCep($enderecoModel, $conn){

        try {
            $query = 'UPDATE endereco SET logradouro = :logradouro, tipo_logradouro = :tipo_logradouro, complemento = :complemento, local = :local, id_cidade = :id_cidade WHERE cep = :cep';
            $prepare = $conn->prepare($query);
            $prepare->bindValue(':cep', str_replace(array('.', '-', ' '), '', $enderecoModel->getCep()), PDO::PARAM_STR);
            $prepare->bindValue(':logradouro', $enderecoModel->getLogradouro(), PDO::PARAM_STR);
            $prepare->bindValue(':tipo_logradouro', $enderecoModel->getTipoLogradouro(), PDO::PARAM_STR);
            $prepare->bindValue(':complemento', $enderecoModel->getComplemento(), PDO::PARAM_STR);
            $prepare->bindValue(':local', $enderecoModel->getLocal(), PDO::PARAM_STR);
            $prepare->bindValue(':id_cidade',$enderecoModel->getIdCidade(), PDO::PARAM_INT);
            $prepare->execute();
            echo "<script>alert('Atualização realizada com sucesso!')</script>";
        } catch (PDOException $e) {
            echo "Erro ao consultar id cidade " . $e->getMessage();
        }        
    }
}
?>
