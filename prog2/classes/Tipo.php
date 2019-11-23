<?php

include_once "BD.php";

class Tipo {
    private $conexao;

    function __construct() {
        $this->conexao = new BD();
    }
}

?>
