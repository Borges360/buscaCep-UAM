<?php
$basedir = realpath(__DIR__);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="brasil.png" height="40" alt="">
            </a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li><a class="nav-link" href="Consultar.php">Consultar</a></li>
                    <li><a class="nav-link" href="Cadastrar.php">Cadastrar</a></li>
                    <li><a class="nav-link" href="Deletar.php">Deletar</a></li>
                    <li><a class="nav-link" href="Atualizar.php">Atualizar</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
</body>    
</html>
