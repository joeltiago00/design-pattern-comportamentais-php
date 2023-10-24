<?php

namespace App\Impostos;

use App\Orcamento;

interface Imposto
{
    public function calcularImposto(Orcamento $orcamento): float;
}