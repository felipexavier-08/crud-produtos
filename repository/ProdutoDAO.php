<?php
    require_once __DIR__ . "/../utils/Conexao.php";
    require_once __DIR__ . "/../classes/models/Produto.php";

    class ProdutoDAO{

        private PDO $pdo;

        public function __construct(){

            try{

                $this->pdo = Conexao::fazerConexao();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, true);


            } catch(PDOException $e) {

                die("Erro na conexão em ProdutoDAO: " . $e->getMessage());

            }

        }

        public function registrarProduto(Produto $Produto){

            try{

                $sql = "INSERT INTO produto(nome_produto, preco_produto) VALUES (:nome_produto, :preco_produto)";

                $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(":nome_produto", $Produto->getNomeProduto(), PDO::PARAM_STR);
                $stmt ->bindValue("preco_produto", $Produto->getPrecoProduto(), PDO::PARAM_INT);
                return $stmt->execute();


            } catch(PDOException $e) {

                echo("Erro em ProdutoDAO ao registrar produto: " . $e->getMessage());

            }
        }

    
        public function listaProdutos(): array {
            try {
                $sql = "SELECT id_produto, nome_produto, preco_produto FROM produto ORDER BY nome_produto";
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute();
                $Produtos = [];
                while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $Produtos[] = $data; 
                }            
                return $Produtos;

            } catch (PDOException $e) {
                error_log("Erro em Produto DAO (listaProdutos): " . $e->getMessage());
                return [];
            } 
        }
        
    }
?>