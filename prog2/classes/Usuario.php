<?php

include_once "BD.php";

class Usuario {
    private $bd;

    function __construct() {
        $this->bd = new BD();
    }

    function login($login, $senha) {
        $sql = "SELECT *
                FROM usuario
                WHERE login = $login and senha = $senha";
        $res = $this->bd->query($sql);
        return $res;
    }

?>
