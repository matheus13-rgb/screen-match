<?php

class Serie extends Titulo
{
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $temporadas,
        public readonly int $episodiosPortemporadas,
        public readonly int $minutosPorEpisodio,
    ) {
        parent::__construct($nome, $anoLancamento, $genero);
    }

        public function duracaoEmMinutos(): int
    {
        return $this->temporadas * $this->episodiosPorTemporadas * $this->minutosPorEpisodio;
    }
}