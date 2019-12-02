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
        $img = ($dados['img'] == "NULL" ? "NULL" : "'" . $dados['img'] . "'");

        $sql = sprintf("UPDATE produto
                        SET cod = %s, nome = '%s',
                            ctipo = %s, ccat = %s,
                            valor = %.2f, dtfab = '%s',
                            dtval = '%s', descr = '%s',
                            img = %s
                        WHERE cod = %s",
                        $dados['cod'], $dados['nome'], $dados['ctipo'],
                        $dados['ccat'], $dados['valor'], $dados['dtfab'],
                        $dados['dtval'], $dados['descr'], $img, $dados['cod']);

        $res = $this->bd->query($sql);
        return $res;
    }

    function excluir($cod) {
        $sql = "DELETE FROM produto
                WHERE cod = " . $cod;

        $res = $this->bd->query($sql);
        return $res;
    }

    function filtroBusca($palavraChave) {
        $sql = "SELECT * FROM produto
                WHERE nome LIKE '%{$palavraChave}%'
                ORDER BY nome";
        $res = $this->bd->select($sql);
        return $res;
    }
    function filtroCodigo($codigo) {
        $sql = "SELECT * FROM produto
                WHERE cod = $codigo";
        $res = $this->bd->select($sql);
        return $res;
    }
    function filtroCategoria($categoria) {
        $sql = "SELECT p.cod,p.nome,p.valor,p.descr,p.img FROM produto p join categoria c
                ON p.ccat = c.cod
                WHERE c.descr = '$categoria'";
        $res = $this->bd->select($sql);
        return $res;
    }
    function listarTodos() {
        $sql = "SELECT * FROM produto";
        $res = $this->bd->select($sql);
        return $res;
    }
    function formataPreco($valor){
	     return "R$ ".str_replace(".", ",", number_format($valor, 2));
    }

}

?>
