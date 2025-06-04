<?php

class Filme {
    private string $nome;
    private int $anoLancamento;
    private string $genero;
    private array $notas = [];

    function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }
    
    function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

    public function anoLancamento(): int
    {
        return $this->anoLancamento;
    }

    public function defineAnoLancamento(int $anoLancamento)
    {
        $this->anoLancamento = $anoLancamento;
    }
}