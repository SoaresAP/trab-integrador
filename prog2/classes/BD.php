<?php

class BD {
    private $host = "localhost";
    private $usuario = "adm";
    private $senha = "123";
    private $bd = "vitari";
    private $conexao;

    function __construct() {
        $this->conexao = mysqli_connect($this->host, $this->usuario,
                                        $this->senha, $this->bd);
        $this->conexao->query("SET NAMES 'utf8'");
    }

    function select($sql) {
        $retorno = $this->conexao->query($sql);
        $arrayResultados = array();
        if ($retorno->num_rows() > 0) {
            while($linha = $retorno->fetch_assoc()) {
                $arrayResultados[] = $linha;
            }
        }
        return $arrayResultados;
    }

    function query($sql) { // outras queries
        return $this->conexao->query($sql);
    }

    function erro(){
        return $this->conexao->error();
    }
}

?>
