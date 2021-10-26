<?php
require_once 'classes/Exemplo.php';

// Requisitos 1 e 2
$exemplo = new Exemplo();

// Requisito 3
echo '<br><b style="color: red">Posição 3 do array</b> = ' . $exemplo->getArray()[2] . '<br><br><hr>';

// Requisito 4
$exemplo->gerarVariavelPosicoes();

// Requisito 5
$exemplo->criarNovoArray();

// Requisito 6
echo '<br><b style="color: red">Existe o número 14?</b><br>' . $exemplo->buscarNumero14() . '<br><br><hr>';

// Requisito 7
$exemplo->percorrerArrayExcluindoNumerosMenores();

// Requisito 8
$exemplo->removerUltimaPosicaoArray();

// Requisito 9
echo '<br><b style="color: red">Quantos elementos existem no array</b> = ' . $exemplo->quantidadeElementosArray() . '<br><br><hr>';

// Requisito 10
$exemplo->inverterPosicaoArray();