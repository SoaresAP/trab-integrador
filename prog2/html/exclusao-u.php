<?php
    include_once "../classes/Usuario.php";
    $usuario = new Usuario();

    if (!empty($_GET)) {
        $usuario->excluir($_GET['login']);
    }

    header("Location: gerenciamento-u-la.php");
?>
