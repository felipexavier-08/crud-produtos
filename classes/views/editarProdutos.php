<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    
    <h1>Página de Edição de Produto</h1>

    <form action="./statusEdicao.php" method="post">

        <input type="hidden" name="id_produto" value="<?php echo $produto->getIdProduto(); ?>">

        <label for="nome_produto">Nome: </label>
        <input type="text" id="nome_produto" name="nome_produto" value="<?php echo htmlspecialchars($produto->getNomeProduto()); ?>">
        <br>
        <label for="preco_produto">Preço: </label>
        <input type="number" id="preco_produto" name="preco_produto" value="<?php echo $produto->getPrecoProduto(); ?>">
        <br>

        <button type="submit">Salvar Alterações</button>

    </form>

</body>
</html>