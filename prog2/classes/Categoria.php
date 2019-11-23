<?php

include_once "BD.php";

class Categoria {
    private $conexao;

    function __construct() {
        $this->conexao = new BD();
    }
}

?>
