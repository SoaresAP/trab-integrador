<?php

include_once "BD.php";

class Usuario {
    private $bd;

    function __construct() {
        $this->bd = new BD();
    }

    function find($login) {
        $sql = sprintf("SELECT *
                        FROM usuario
                        WHERE login = '%s'",
                        $login);

        $res = $this->bd->select($sql);
        return $res;
    }

    function login($login, $senha) {
        $sql = sprintf("SELECT *
                        FROM usuario
                        WHERE login = '%s' and senha = '%s'",
                        $login, $senha);

        $res = $this->bd->select($sql);
        return $res;
    }

    function cadastrar($dados) {
        $sql = sprintf("INSERT INTO usuario
        	            VALUES ('%s', '%s', '%s')",
                        $dados['login'], $dados['senha'], $dados['email']);

        $res = $this->bd->query($sql);
        return $res;
    }

    function excluir($login) {
        $sql = "DELETE FROM usuario
                WHERE login = '" . $login . "'";

        $res = $this->bd->query($sql);
        return $res;
    }
}
?>
