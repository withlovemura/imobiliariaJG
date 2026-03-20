<?php

class Cidade
{
    private $id;
    private $nome;
    private $estado;

    public function __construct(string $nome, string $estado = null)
    {
        $this->setNome($nome);
        $this->setEstado($estado);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }

    public function setId(int $id)
    {
        if ($this->id === null) {
            $this->id = $id;
        }
    }

    public function setNome(string $nome)
    {
        $nome = trim($nome);
        //Simples validação
        if (empty($nome)) {
            throw new Exception("O nome da cidade é obrigatório.");
        }
        $this->nome = $nome;
    }

    public function setEstado(string $estado)
    {
        $estado = strtoupper(trim($estado)); //Função transforma em letras maiusculas
        if (strlen($estado) !== 2) { //Verifica quantos caracteres tem na variavel estado
            throw new Exception("O estado deve conter exatamente 2 letras.");
        }
        $this->estado = $estado;
    }
}