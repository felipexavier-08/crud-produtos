<?php 
    require_once __DIR__ . "/../../repository/ProdutoDAO.php";
    require_once __DIR__ . "/../models/Produto.php";

    class ProdutoController {
        private ProdutoDAO $dao;
        public function __construct(){
            $this->dao = new ProdutoDAO();
        }

        public function create(string $method): string {
            if($method === "GET"){
                require __DIR__ . "/../views/cadastroProdutos.php";
                return "";
            }

            if($method === "POST") {
                $Produto = new Produto(
                    0,
                    htmlspecialchars($_POST["nome_produto"] ?? ''),
                    (int)($_POST["preco_produto"] ?? 0),
                );
                $response = $this->dao->registrarProduto($Produto);
                if ($response) {   
                    return true;
                }
                return false;
            }
        }

        public function list(string $method): array {
            if ($method === "GET") {
                $Produtos = $this->dao->listaProdutos();
                return $Produtos;
            }
            return "Método não suportado.";
        }

        public function edit(string $method): Produto|bool {
            if ($method === "GET") {
                $id = (int)($_GET['id'] ?? 0); 
                $produto = $this->dao->buscarProdutoPorId($id); 
                
                if ($produto) {
                    return $produto;
                }
                return false;
            }

            if ($method === "POST") {
                $id = (int)($_POST['id_produto'] ?? 0);
                $nome = htmlspecialchars($_POST["nome_produto"] ?? '');
                $preco = (int)($_POST["preco_produto"] ?? 0);

                $ProdutoAtualizado = new Produto(
                    $id,
                    $nome,
                    $preco
                );

                return $this->dao->editarProduto($ProdutoAtualizado);
            }
            return false;
        }
    }