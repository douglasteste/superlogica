<?php
require_once 'classes/Exemplo.php';

// Botão de navegação (para voltar a página principal)
echo '<style>
        .btn { padding: 10px 40px; font-weight: bold; text-transform: uppercase; color: white; background-color: #0e8c00; border: 1px #0e8501 solid; border-radius: 7px; text-decoration: none; margin: 0 10px }
    </style>
    <br><a href="../index.html" class="btn"> Voltar para o início </a><br><br><br><br>';


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