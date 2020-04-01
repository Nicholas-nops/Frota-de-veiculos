<?php
$nome = $_SESSION['nome'];
$placaveiculo = $_SESSION['placaveiculo'];
$localproblema = $_SESSION['localproblema'];
$nivelurgencia = $_SESSION['nivelurgencia'];
$descricao = $_SESSION['descricao'];
$hora = $_SESSION['hora'];
$horasaida = $_SESSION['horasaida'];
$status = $_SESSION['status'];

echo "Nome do relator: " . $nome . "\n" . "Placa do veículo: " . $placaveiculo . "\n" . 
"Local do problema: " . $localproblema . "\n" . "Nivel de urgência: " . $nivelurgencia . "\n" . 
"Descrição: " . $descricao . "\n" . "Horario em que foi solicitado: " . $hora . "\n" .
 "Horario em que foi resolvido: " . $horasaida . "\n" . "Status do pedido: " . $status . "\n"; 







?>