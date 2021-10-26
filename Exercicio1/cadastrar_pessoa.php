<?php
require_once 'classes/Pessoa.php';

$name     = @$_POST['name'];
$userName = @$_POST['userName'];
$zipCode  = @$_POST['zipCode'];
$email    = @$_POST['email'];
$password = @$_POST['password'];

if (isset($name) && isset($userName) && isset($zipCode) && isset($email) && isset($password)) {
    $pessoa = new Pessoa($name, $userName, $zipCode, $email, $password);
    $cadastro = $pessoa->cadastrarPessoa();

    if ($cadastro == 'Erro') {
        $retorno = [
            'tipo' => 'error',
            'mensagem' => $cadastro,
            'dados' => ''
        ];

    } else {
        $retorno = [
            'tipo' => 'success',
            'mensagem' => 'Pessoa cadastrada com sucesso!',
            'dados' => $cadastro
        ];
    }

} else {

    $retorno = [
        'tipo' => 'error',
        'mensagem' => 'É necessário enviar todos os dados'
    ];   
}

echo json_encode($retorno);