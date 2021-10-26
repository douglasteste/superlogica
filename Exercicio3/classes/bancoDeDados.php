<?php 

class bancoDeDados {

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

    public function getTabela() {
        try {
            $conexao_bd = $this->conectarBancoDeDados();
        } catch (\Throwable $th) {
            return $th;
        }

        $retorno   = '<center><table class="tabela">';

        $select    = "SELECT 
                        (SELECT CONCAT(u.nome, ' - ', genero) FROM info i WHERE u.cpf = i.cpf)  as usuario,
                        (SELECT IF ((YEAR(CURDATE()) - (SELECT i.ano_nascimento FROM info i WHERE u.cpf = i.cpf)) > 50, 'SIM', 'NÃO')) as maior_50_anos
                    FROM 
                        usuario u
                    WHERE 
                        u.cpf IN('07583509025', '16798125050', '21142450040')
                    ORDER BY
                        u.cpf ASC";

        $resultado = $conexao_bd->query($select);

        if ($resultado->num_rows > 0) {
            $retorno .= '<tr>
                            <th>usuário</th>
                            <th>maior_50_anos</th>
                        </tr>';
            while($row = $resultado->fetch_assoc()) {
                $retorno .= '<tr>
                                <td>'.$row["usuario"]. '</td>
                                <td>'.$row["maior_50_anos"]. '</td>
                            </tr>';
            }
        }

        $retorno .= '</table></center>';

        return $retorno;
        mysqli_close($conexao_bd);
    }
}