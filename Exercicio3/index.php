<?php 
require_once 'classes/bancoDeDados.php';

echo "<style>
        * { font-family: arial } 
        .btn { padding: 10px 40px; font-weight: bold; text-transform: uppercase; color: white; background-color: #0e8c00; border: 1px #0e8501 solid; border-radius: 7px; text-decoration: none; margin: 0 10px }
        .tabela { text-align: center; border-collapse: collapse; margin: 25px 0; font-size: 0.9em; font-family: sans-serif; min-width: 400px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.15); }
        .tabela thead tr { background-color: #009879; color: #ffffff; text-align: left; }
        .tabela th, .tabela td { padding: 12px 15px; }
        .tabela tbody tr { border-bottom: 1px solid #dddddd; }
        .tabela tbody tr:nth-of-type(even) { background-color: #f3f3f3; }
        .tabela tbody tr:last-of-type { border-bottom: 2px solid #009879; }
    </style>";

echo '<br><a href="../index.html" class="btn"> Voltar para o início </a><br>';

$conexao = new bancoDeDados();
echo $conexao->getTabela();