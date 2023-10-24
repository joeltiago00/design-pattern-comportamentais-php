<?php

include '../vendor/autoload.php';

$calculadora = new \App\CalculadoraDeImpostos();

$orcamento = new \App\Orcamento();
$orcamento->valor = 300;

$imposto = new \App\Impostos\Icms();

var_dump($calculadora->calcular($orcamento, $imposto));