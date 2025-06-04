<?php

require __DIR__ . "/src/Model/Filme.php";

echo "Bem-vindo ao ScreenMatch/n";

$filme = new Filme();
$filme->defineAnoLancamento(2021);
/*$filme->nome = 'Thor - Ragnarok';
$filme->anoLancamento = 2021;
$filme->genero = 'super-heroi';
$filme->nota = 7.2;*/

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento();