<?php

class Serie extends Titulo
{
    public function __construct(
        public readonly int $temporadas,
        public readonly int $episodiosPortemporadas,
        public readonly int $minutosPorEpisodio,
    ) {
    }
}