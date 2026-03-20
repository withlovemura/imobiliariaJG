<?php

require_once 'App/models/Cidade.php';

//Criando objeto
try{
    $cidade = new Cidade("Itapira", "sp");
    $cidade->setId(1);

    echo "<h2>Dados da Cidade</h2>";
    echo "ID: " . $cidade->getId() . "<br>";
    echo "Nome: " . $cidade->getNome() . "<br>";
    echo "Estado: " . $cidade->getEstado() . "<br>";
} 

catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>