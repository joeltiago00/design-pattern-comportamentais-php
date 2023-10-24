<?php

namespace App;

use App\Descontos\DescontoMaisDeCincoItens;
use App\Descontos\DescontoMaisDeQuinhentosReais;
use App\Descontos\SemDesconto;

class CalculadoraDeDesconto
{
    public function calcular(Orcamento $orcamento): float
    {
        $cadeia = new DescontoMaisDeCincoItens(
            new DescontoMaisDeQuinhentosReais(
                new SemDesconto()
            )
        );

        return $cadeia->calcular($orcamento);
    }
}