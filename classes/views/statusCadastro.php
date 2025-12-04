<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once __DIR__ . "/../controllers/ProdutoController.php";

    $controller = new ProdutoController();

    $render = $controller->create($_SERVER["REQUEST_METHOD"]);

    if ($render) {
        echo("<h1 align='Center'>Produto cadastrado com sucesso!");
    }else{
        echo("<h1 align='Center'>Produto Não foi cadastrado!</h1><br>");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status do Cadastro</title>
</head>
<body>

    <a href="./cadastroProdutos.php">
        <button>Cadastrar um novo Produto</button>
    </a>

    <a href="../../index.php"></a>
    
</body>
</html>
