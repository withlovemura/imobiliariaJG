<?php

require_once dirname(__DIR__, 2) . '/config/database.php';
require_once 'Cidade.php';

class CidadeRepository
{
    private $conn;

    public function __construct()
    {
        // Obtém conexão via Singleton
        require dirname(__DIR__, 2) . '/config/database.php';
        $this->conn = $pdo;
    }

    public function salvar(Cidade $cidade)
    {
        $stmt = $this->conn->prepare(
            "INSERT INTO cidades (nome, estado) VALUES (?, ?)"
        );

        $stmt->execute([
            $cidade->getNome(),
            $cidade->getEstado()
        ]);
    }

    public function listar()
    {
        $stmt = $this->conn->query("SELECT * FROM cidades");
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $cidades = [];

        foreach ($dados as $linha) {
            $cidade = new Cidade(
                $linha["nome"],
                $linha["estado"]
            );
            $cidade->setId($linha['id']);
            $cidades[] = $cidade;
        }
        return $cidades;
    }
}