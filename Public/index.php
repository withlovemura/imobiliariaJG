<?php

require_once '../app/controllers/CidadeController.php';

$controller = new CidadeController();

//Para testar inserção
$controller->store();

//Para testar o listar
$controller->index();

/*  require_once '../Config/databasesingleton.php';
require_once '../app/models/CidadeRepository.php';

try {
    $repository = new CidadeRepository;

    $cidade = new Cidade("Mogi Mirim","SP");

    //Salvando no banco
    $repository->salvar($cidade);

    echo "<h3>Cidade salva com sucesso!</h3>";

    //Listando cidades
    $cidades = $repository->listar();

    foreach ($cidades as $cidade) {

        echo "ID: " . $cidade->getId() . "<br>";
        echo "Nome: " . $cidade->getNome() . "<br>";
        echo "Estado: " . $cidade->getEstado() . "<br>";
        echo "<hr>";
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
$db = Database::getInstance();
$conn = $db->getConnection();

echo "Conexão realizada com sucesso!";

//Inserindo Primeira Cidade Manualmente
$stmt = $conn->prepare( //Prepare cria instrução para receber dados
    "INSERT INTO cidades (nome, estado) VALUES (?, ?)"
);
$stmt->execute(["Itapira", "SP"]);

//Realizando Primeira Consulta
$stmt = $conn->query("SELECT * FROM cidades"); //Executa uma consulta no SQL 
$cidades = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($cidades);
echo "</pre>"; */
?>