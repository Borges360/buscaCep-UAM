<?php require_once("../controller/editarController.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script> 
        $(function(){
          $("#header").load("header.php"); 
        });
    </script> 
</head>

<body>
    <div id="header"></div>
    <fieldset>
        <div class="form-group">
            <form method="POST" action="../controller/editarController.php">
                <h1 style="color: #fff; padding-bottom: 5%;">Atualizar de CEP</h1>
                <input class="form-control" type="text" id="cep" name="cep" placeholder="CEP" required><br />
                <input class="form-control" type="text" id="logradouro" name="logradouro" placeholder="Logradouro"><br />
                <input class="form-control" type="text" id="tipoLogradouro" name="tipoLogradouro" placeholder="Tipo Logradouro"><br />
                <input class="form-control" type="text" id="complemento" name="complemento" placeholder="Complemento"><br />
                <select class="form-control" id="uf" name="uf" placeholder="UF"><br />
                    <option value="" disabled selected>Estado</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                </select><br />
                <input class="form-control" type="text" id="cidade" name="cidade" placeholder="Cidade"><br />
                <input class="form-control" type="text" id="local" name="local" placeholder="Local"><br />
                <div class="form-group">
                    <input class="form-control" type="submit" name="atualizar" value="Atualizar">
                </div>
            </form>
        </div>    
    </fieldset>
</body>

</html>