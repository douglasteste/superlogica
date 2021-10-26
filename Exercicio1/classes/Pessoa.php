<?php

class Pessoa {

    private $nome;
    private $login;
    private $cep;
    private $email;
    private $senha;

    public function __construct(String $nome = NULL, String $login = NULL, String $cep = NULL, String $email = NULL, String $senha = NULL) {
        $this->nome = $nome;
        $this->login = $login;
        $this->cep = $cep;
        $this->email = $email;
        $this->senha = $senha;
    }
    

    private function conectarBancoDeDados() {
        // Alterar os dados de acesso ao banco de dados, conforme a sua configuração localhost
        $bd_servername = "localhost";
        $bd_database = "superlogica";
        $bd_user = "root";
        $bd_pass = "";

        $conexao_bd = mysqli_connect($bd_servername, $bd_user, $bd_pass, $bd_database);
        if ($conexao_bd->connect_error) {
            return "Erro na conexão com o banco de dados: " . $conexao_bd->connect_error;
        }

        return $conexao_bd;
    }


    public function cadastrarPessoa() {
        try {
            $conexao_bd = $this->conectarBancoDeDados();
        } catch (\Throwable $th) {
            return $th;
        }
        
        $insert = "INSERT INTO pessoas (nome, login, cep, email, senha) VALUES (
                    '{$this->nome}', 
                    '{$this->login}', 
                    '{$this->cep}', 
                    '{$this->email}', 
                    '{$this->senha}'
                )";

        if ($conexao_bd->query($insert) === TRUE) {
            return $this->consultarPessoas();
        } else {
            return "Erro";
        }
        mysqli_close($conexao_bd);
    }


    public function consultarPessoas() {
        try {
            $conexao_bd = $this->conectarBancoDeDados();
        } catch (\Throwable $th) {
            return $th;
        }

        $retorno   = '<center><table class="tabela">';
        $select    = "SELECT * FROM pessoas ORDER BY id DESC";
        $resultado = $conexao_bd->query($select);

        if ($resultado->num_rows > 0) {
            $retorno .= '<tr>
                            <th>Nome Completo</th>
                            <th>Login</th>
                            <th>CEP</th>
                            <th>Email</th>
                            <th>Senha</th>
                        </tr>';
            while($row = $resultado->fetch_assoc()) {
                $retorno .= '<tr>
                                <td>'.$row["nome"]. '</td>
                                <td>'.$row["login"]. '</td>
                                <td>'.$row["cep"]. '</td>
                                <td>'.$row["email"]. '</td>
                                <td>'.$row["senha"]. '</td>
                            </tr>';
            }
        } else {
            $retorno .= '<tr>                        
                            <td>Nenhuma pessoa cadastrada até o momento<td>
                        </tr>';
        }

        $retorno .= '</table></center>';

        return $retorno;
        mysqli_close($conexao_bd);
    }

}