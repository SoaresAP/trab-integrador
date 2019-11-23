<?php

include_once "BD.php";

class Produto {
    private $bd;

    function __construct() {
        $this->bd = new BD();
    }

    function incluir($dados) {
        $sql = "INSERT INTO produto
                VALUES ($dados['cod'], $dados['nome'], $dados['ctipo'],
                        $dados['ccat'], $dados['valor'], $dados['dtfab'],
                        $dados['dtval'], $dados['descr'], $dados['img'])";

        $res = $this->bd->query($sql);
        return $res;
    }

    function alterar($dados) {
        $sql = "UPDATE produto
                SET cod = $dados['cod'], nome = $dados['nome'],
                    ctipo = $dados['ctipo'], ccat = $dados['ccat'],
                    valor = $dados['valor'], dtfab = $dados['dtfab'],
                    dtval = $dados['dtval'], descr = $dados['descr'],
                    img = $dados['img']
                WHERE id = $dados['id']";

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
