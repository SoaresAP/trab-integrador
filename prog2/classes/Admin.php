<?php

include "BD.php";

class Admin {
    private $conexao;

    function __construct() {
        $this->conexao = new BD();
    }
}

?>
