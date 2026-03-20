<?php

require_once 'App/models/Cidade.php';

//Criando objeto
$cidade = new Cidade();

//Atribuindo valores diretamente
$cidade->id = 1;
$cidade->nome = "Itapira";
$cidade->estado = "SP";

echo "<pre>";
var_dump($cidade);
echo "</pre>";

?>