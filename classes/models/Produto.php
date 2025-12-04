<?php

    class Produto{

        private int $idProduto;
        private string $nomeProduto;
        private int $precoProduto;

        

        public function __construct(

            $_idProduto,
            $_nomeProduto,
            $_precoProduto        

        ){

            $this->idProduto = $_idProduto;
            $this->nomeProduto = $_nomeProduto;
            $this->precoProduto = $_precoProduto;

        }

        
        /**
         * Get the value of idProduto
         */ 
        public function getIdProduto()
        {
                return $this->idProduto;
        }

        /**
         * Set the value of idProduto
         *
         * @return  self
         */ 
        public function setIdProduto($idProduto)
        {
                $this->idProduto = $idProduto;

                return $this;
        }

        /**
         * Get the value of nomeProduto
         */ 

        public function getNomeProduto()
        {
            return $this->nomeProduto;
        }

        /**
         * Set the value of nomeProduto
         *
         * @return  self
         */ 

        public function setNomeProduto($nomeProduto)
        {
            $this->nomeProduto = $nomeProduto;
            return $this;
        }

        /**
         * Get the value of precoProduto
         */ 

        public function getPrecoProduto()
        {
            return $this->precoProduto;
        }

        /**
         * Set the value of precoProduto
         *
         * @return  self
         */ 

        public function setPrecoProduto($precoProduto)
        {
            $this->precoProduto = $precoProduto;
            return $this;
        }
        
    }

    

?>