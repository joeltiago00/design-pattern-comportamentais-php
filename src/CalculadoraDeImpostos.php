<?php

namespace App;

use App\Impostos\Imposto;

class CalculadoraDeImpostos
{
    public function calcular(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calcularImposto($orcamento);
    }
}