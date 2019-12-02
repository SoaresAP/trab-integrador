<?php

include_once "BD.php";

class Admin {
    private $bd;

    function __construct() {
        $this->bd = new BD();
    }
    function find($login) {
        $sql = sprintf("SELECT *
                        FROM admin
                        WHERE login = '%s'",
                        $login);

        $res = $this->bd->select($sql);
        return $res;
    }

    function login($login, $senha) {
        $sql = sprintf("SELECT *
                        FROM admin
                        WHERE login = '%s' and senha = '%s'",
                        $login, $senha);

        $res = $this->bd->select($sql);
        return $res;
    }
}
?>
