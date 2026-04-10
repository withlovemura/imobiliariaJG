<?php

class Database
{
    private static $instance = null; //$instance variavel que armazena a única instancia da classe Database utilizada para implementar o padrão Singleton.
    private $connection;

    private function __construct()
    {
    $host = "localhost";
    $dbname = "imobiliariaJG"; //Faz diferença colocar JG pois no Linux distingue maiuscula e minuscula
    $username = "root";
    $password = "";

    try {
        $this->connection = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8",
            $username,
            $password
        );

        //Habilita exceções para erros
        $this->connection->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
    } catch (PDOException $e) {
        die("Erro na conexão: " . $e->getMessage());
    }
   }

    public static function getInstance() //Criar o objeto sem o new, verifica se já existe o arquivo de conexão com o banco de dados, se for = 0 vai criar a conexão
    {
        if (self::$instance === null){
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}