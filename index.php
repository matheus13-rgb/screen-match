<?php

require __DIR__ . "/src/Model/Avaliavel.php";
require __DIR__ . "/src/Model/Genero.php";
require __DIR__ . "/src/Model/Titulo.php";
require __DIR__ . "/src/Model/Episodio.php";
require __DIR__ . "/src/Model/Serie.php";
require __DIR__ . "/src/Model/Filme.php";
require __DIR__ . "/src/Calculations/CalculadoraDeMaratona.php";
require __DIR__ . "/src/Calculations/ConversorNotaEstrela.php";


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
$episodio = new Episodio($serie, 'Episodio piloto', 1);

echo $serie->anoLancamento . "\n";

$serie->avalia(10);

echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();  

echo "Para essa maratona, você precisa de $duracao minutos \n";

$conversor = new ConversorNotaEstrela();
echo $conversor->Converte($serie) . "\n";
echo $conversor->Converte($filme);