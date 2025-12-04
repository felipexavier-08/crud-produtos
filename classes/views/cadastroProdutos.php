<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre um produto</title>
</head>
<body>
    
    <h1>Página de cadastro de produtos</h1>

    <form action="./statusCadastro.php" method="post">

        <label for="nome_produto">Nome: </label>
        <input type="text" id="nome_produto" name= "nome_produto">
        <br>
        <label for="preco_produto">Preço: </label>
        <input type="number" id="preco_produto" name="preco_produto">
        <br>

        <button>Registrar</button>

    </form>

</body>
</html>