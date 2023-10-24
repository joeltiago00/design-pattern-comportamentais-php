<?php

include '../vendor/autoload.php';

$calculadora = new \App\CalculadoraDeImpostos();

$orcamento = new \App\Orcamento();
$orcamento->valor = 300;
$orcamento->quantidadeDeItens = 5;

$calculadora = new \App\CalculadoraDeDesconto();

var_dump($calculadora->calcular($orcamento));