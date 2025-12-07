<?php

    class Conexao{

        private static string $server = "localhost"; 
        private static string $dbname = "loja";   
        private static string $port = "3307"; 
        private static string $user = "root";
        private static string $password = "";

    

        public static function fazerConexao(): PDO {

            try{

                $dsn = ("mysql:host=" . self::$server . ";dbname=" . self::$dbname . ";port=" . self::$port);
                $conn = new PDO($dsn, self::$user, self::$password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            } catch(PDOException $e) {
                
                die("Erro ao conectar com o banco de dados em (Conexao): " . $e->getMessage());
                
            } finally {

                return $conn;
                
            }

        }
    }

?>