<?php

namespace App\Descontos;

use App\Orcamento;

class DescontoMaisDeQuinhentosReais extends Desconto
{
    public function calcular(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.05;
        }

        return $this->proximoDesconto->calcular($orcamento);
    }
}