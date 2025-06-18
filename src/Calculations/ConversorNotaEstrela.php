<?php

namespace ScreenMatch\Calculations;

use DivisionByZeroError;
use ScreenMatch\Model\Avaliavel;

class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        try {
        $nota = $avaliavel->media();

        return round($nota) / 2;
        } catch(DivisionByZeroError $erro){
            return 0;
        }
    }
}