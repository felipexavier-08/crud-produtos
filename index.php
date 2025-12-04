<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
</head>
<body>
    
    <a href="./classes/views/cadastroProdutos.php">
        <button>Cadastre um novo produto</button>
    </a>
    <a href="./classes/views/listarProdutos.php">
        <button>Ver Lista de produtos</button>
    </a>

</body>
</html>