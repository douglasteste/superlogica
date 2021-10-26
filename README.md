# Teste Técnico - Superlógica

Desenvolvindo por:  **Douglas Sales Alves**

<br />

## Descrição
O desafio foi dividido em 3 etapas (exercícios), que mesclam entre PHP, HTML, CSS e SQL. <br />
Com isso, existem três diretórios (um para cada desafio) e uma página inicial, que auxilia os usuários a navegarem por estes desafios. <br />
E para facilitar a usabilidade, todas as etapas possuem um botão de retorno para a página inicial.

<br />

## Configuração do Banco de Dados

- Alguns exercícios possuem banco de dados (nome_da_base.sql), que ficam nas suas respectivas pastas. É importante manter os nomes das tabelas para o funcionamento correto da aplicação.

- Após importar as bases, será necessário configurar os dados de acesso ao banco, conforme o seu ambiente:

```PHP
$bd_servername = "localhost";
$bd_database = "base_de_dados";
$bd_user = "root";
$bd_pass = "";
```

- Você precisará configurar esses dados nos métodos **conectarBancoDeDados()** dos seguintes arquivos: <br /> <br />

Arquivo: **Pessoa.php** <br />
Link: https://github.com/douglasteste/superlogica/blob/main/Exercicio1/classes/Pessoa.php

<br />

Arquivo: **bancoDeDados.php** <br />
Link: https://github.com/douglasteste/superlogica/blob/main/Exercicio3/classes/bancoDeDados.php

<br />

## Passo a passo para utilização:
- Após importar e configurar o banco de dados, basta acessar a página inicial do projeto: `http://localhost/index.html` e navegar pelos exercícios. <br /> <br />
- Alguns arquivos contém comentários para facilitar o entendimento.
