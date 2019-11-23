<?php

include "BD.php";

class Produto {
    private $conexao;

    function __construct() {
        $this->conexao = new BD();
    }
}

?>
