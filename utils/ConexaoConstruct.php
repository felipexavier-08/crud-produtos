<?php

class Conexao {

    private static  $server = "localhost";
    private static  $dbname = "loja";
    private static  $port = "3307";
    private static  $user = "root";
    private static  $password = "";

    public function __construct(){}

    public static function fazerConexao(): PDO {

        try {

            $dsn = "mysql:host=" . $this->$server . ";dbname=" . $this->$dbname . ";port=" . $this->$port;
            $conn = new PDO($dsn, $this->$user, $this->$password);
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;

        } catch(PDOException $e) {

            error_log("Erro ao conectar: " . $e->getMessage());
            //throw new \PDOException("Falha na Conexão com o Banco de Dados.");
            
        }
    }
}

?>