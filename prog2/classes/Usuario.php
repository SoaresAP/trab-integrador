<?php

include "BD.php";

class Usuario {
    private $conexao;

    function __construct() {
        $this->conexao = new BD();
    }
}

?>
