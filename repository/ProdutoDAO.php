<?php
    require_once __DIR__ . "/../classes/models/Produto.php";
    require_once __DIR__ . "/../utils/Conexao.php";

    class ProdutoDAO {
        private PDO $pdo;

        public function __construct(){

            try{
    
                $this->pdo = Conexao::fazerConexao();

            } catch(PDOException $e) {
    
                die("Erro ao conectar com o banco de dados em ProdutoDAO: " . $e->getMessage());
    
            }


        }

        public function registrarProduto(Produto $Produto){

            try{

                $sql = "INSERT INTO produto(nome_produto, preco_produto) VALUES (:nome_produto, :preco_produto)";
                $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(":nome_produto", $Produto->getNomeProduto(), PDO::PARAM_STR);
                $stmt->bindValue(":preco_produto", $Produto->getPrecoProduto(), PDO::PARAM_INT);

                return $stmt->execute();

            } catch(PDOException $e) {

                die("Erro ao registrar produto: " . $e->getMessage());
            }           

        }

        public function listarProdutos() {


            try{

                $sql = "SELECT * FROM produto";

                $stmt = $this->pdo->prepare($sql);
                $stmt->execute();

                return $stmt->fetchAll(PDO::FETCH_ASSOC);

            } catch(PDOException $e){

                die("Erro ao conectar a partir do pdo na listagem de produtos: " . $e->getMessage());

            }   
    
        }

        public function atualizarProduto(Produto $Produto) {

            try{

                $sql = "UPDATE produto SET nome_produto=:nome_produto, preco_produto=:preco_produto WHERE id_produto=:id_produto";
    
                $stmt = $this->dao->prepare($sql);
                $stmt->bindValue(":id", $Produto->getIdProduto(), PDO::PARAM_INT);
                $stmt->bindValue(":nome_produto", $Produto->getNomeProduto(), PDO::PARAM_STR);
                $stmt->bindValue(":preco_produto", $Produto->getPrecoProduto(), PDO::PARAM_INT);
                
            } catch(PDOException $e) {

                die("Erro ao atualizar usuario em DAO: " . $e->getMessage());

            }

        }

    }


?>