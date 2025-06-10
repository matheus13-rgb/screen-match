<?php

require __DIR__ . "/src/Model/Genero.php";
require __DIR__ . "/src/Model/Titulo.php";
require __DIR__ . "/src/Model/Serie.php";
require __DIR__ . "/src/Model/Filme.php";

echo "Bem-vindo ao ScreenMatch \n";

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    Genero::SuperHeroi,
    180,
);

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";

$serie = new Serie('Breaking bad', 2008, Genero::Drama, 10, 20, 30);

echo $serie->anoLancamento . "\n";

$serie->avalia(10);

echo $serie->media() . "\n";