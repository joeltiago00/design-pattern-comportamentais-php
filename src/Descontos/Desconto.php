<?php

namespace App\Descontos;

use App\Orcamento;

abstract class Desconto
{
    public function __construct(protected readonly ?Desconto $proximoDesconto)
    {
    }

    abstract function calcular(Orcamento $orcamento): float;
}