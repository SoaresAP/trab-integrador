<?php

include_once "BD.php";

class Admin {
    private $bd;

    function __construct() {
        $this->bd = new BD();
    }

    function login($login, $senha) {
        $sql = "SELECT *
                FROM admin
                WHERE login = $login and senha = $senha";
        $res = $this->bd->query($sql);
        return $res;
    }
}

?>
