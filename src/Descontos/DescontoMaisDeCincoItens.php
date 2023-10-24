<?php

namespace App\Descontos;

use App\Orcamento;

class DescontoMaisDeCincoItens extends Desconto
{
    public function calcular(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeDeItens > 5 ) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->calcular($orcamento);
    }
}