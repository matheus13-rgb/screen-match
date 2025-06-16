<?php

namespace ScreenMatch\Calculations;
use ScreenMatch\Model\Avaliavel;

class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        $nota = $avaliavel->media();

        // Realiza a conversão

        return round($nota) / 2;
    }
}