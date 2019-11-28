<?php
    include "../classes/Produto.php";
    $prod = new Produto();

    $bd = new BD();

    if (!empty($_POST)) {
        $tipo = $bd->select("SELECT cod AS tipo
                             FROM tipo
                             WHERE descr = '" . $_POST['tipo'] . "'")[0];

        $cat = $bd->select("SELECT cod AS cat
                            FROM categoria
                            WHERE descr = '" . $_POST['categoria'] . "'")[0];

        $dados = array('cod' => $_POST['codigo'], 'nome' => $_POST['nome'],
                       'ctipo' => $tipo, 'ccat' => $cat,
                       'valor' => $_POST['valor'], 'dtfab' => $_POST['fabricacao'],
                       'dtval' => $_POST['validade'], 'descr' => $_POST['descricao'],
                       'img' => "NULL");

        var_dump($dados);

        $res = $prod->incluir($dados);
        var_dump($res);
    }
?>
