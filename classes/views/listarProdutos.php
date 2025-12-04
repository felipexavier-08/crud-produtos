<?php
    require_once __DIR__ . "/../controllers/ProdutoController.php";
    $controller = new ProdutoController();
    session_start();
    $Produtos  = $controller->list("GET");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="./css/listarProdutos.css">
</head>
<body>

    <h2>Lista de Produtos Cadastrados</h2>
    

    <?php if (empty($Produtos)): ?>
        <p>Nenhum Produto cadastrado no momento.</p>
    <?php else: ?>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Produtos as $Produto): ?>
                    <tr>
                        <td><?php echo $Produto['id_produto']; ?></td>
                        <td><?php echo $Produto['nome_produto']?></td>
                        <td><?php echo $Produto['preco_produto']; ?></td>
                        <td>
                            <a href="./editarProdutos.php?id=<?php echo $Produto['id_produto']; ?>">Editar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php endif; ?>

</body>
</html>