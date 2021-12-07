<?php require_once("../controller/buscarController.php");?>
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
            <form action="" method="POST" action="../controller/buscarController.php">
                <h1 style="color: #fff; padding-bottom: 5%;">Busca de Endereços</h1>
                <input class="form-control" type="text" id="cep" name="cep" placeholder="CEP*" required><br />
                <div class="form-group">
                    <input class="form-control" type="submit" name="buscar" value="Buscar">
                </div>
            </form>
        </div>    
    </fieldset>
    
</body>

</html>