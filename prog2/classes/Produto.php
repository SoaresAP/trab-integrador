<?php

include_once "BD.php";

class Produto {
    private $bd;

    function __construct() {
        $this->bd = new BD();
    }

    function incluir($dados) {
        $img = ($dados['img'] == "NULL" ? "NULL" : "'" . $dados['img'] . "'");

        $sql = sprintf("INSERT INTO produto VALUES
                        (%s, '%s', %s, %s, %.2f, '%s', '%s', '%s', %s)",
                        $dados['cod'], $dados['nome'], $dados['ctipo'],
                        $dados['ccat'], $dados['valor'], $dados['dtfab'],
                        $dados['dtval'], $dados['descr'], $img);

        $res = $this->bd->query($sql);
        return $res;
    }

    function alterar($dados) {
        $sql = sprintf("UPDATE produto
                        SET cod = %s, nome = '%s',
                            ctipo = %s, ccat = %s,
                            valor = %.2f, dtfab = '%s',
                            dtval = '%s', descr = '%s',
                            img = '%s'
                        WHERE id = %s",
                        $dados['cod'], $dados['nome'], $dados['ctipo'],
                        $dados['ccat'], $dados['valor'], $dados['dtfab'],
                        $dados['dtval'], $dados['descr'], $dados['img'],
                        $dados['cod']);

        $res = $this->bd->query($sql);
        return $res;
    }

    function excluir($id) {
        $sql = "DELETE FROM produto
                WHERE id = $id";

        $res = $this->bd->query($sql);
        return $res;
    }
}

?>
