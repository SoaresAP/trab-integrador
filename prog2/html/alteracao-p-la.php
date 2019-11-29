<?php
    include_once "../classes/BD.php";
    $bd = new BD();

    include_once "../classes/Produto.php";
    $prod = new Produto();

    if (!empty($_POST)) {
        if ($_POST['envio'] == "alterar") {
            $tipo = $bd->select("SELECT cod AS tipo
                                 FROM tipo
                                 WHERE descr = '" . $_POST['tipo'] . "'")[0]['tipo'];

            $cat = $bd->select("SELECT cod AS cat
                                FROM categoria
                                WHERE descr = '" . $_POST['categoria'] . "'")[0]['cat'];

            $dados = array('cod' => $_POST['codigo'], 'nome' => $_POST['nome'],
                           'ctipo' => $tipo, 'ccat' => $cat,
                           'valor' => $_POST['valor'], 'dtfab' => $_POST['fabricacao'],
                           'dtval' => $_POST['validade'], 'descr' => $_POST['descricao'],
                           'img' => "NULL");

            $res = $prod->alterar($dados);
        } else if ($_POST['envio'] == "excluir") {
            $res = $prod->excluir($_POST['codigo']);
        }

        header("Location: pesquisa-la.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <title>Vitari - Cosméticos e Perfumaria</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <link rel="stylesheet" href="../css/reset.css">

        <link rel="stylesheet" href="../css/estilo0.css">
        <link rel="stylesheet" href="../css/estilo2.css">
        <link rel="stylesheet" href="../css/estilo4.css">
        <link rel="stylesheet" href="../css/estilo5.css">
        <link rel="stylesheet" href="../css/estilo8.css">

        <link rel="stylesheet" href="../css/alteracao-p-la.css">

        <link rel="stylesheet" href="../css/menu-lateral.css">
        <link rel="stylesheet" href="../css/menu-lateral-2.css">
    </head>

    <body>

        <div class="grid-conteiner" id="tela">

            <?php include_once "../includes/head4.php"; ?>

            <main class="grid-conteiner">
                <div class="grid-conteiner" id="titulo">
                    <h1>ALTERAÇÃO DE PRODUTO</h1>
                </div>

                <div class="grid-conteiner" id="formulario">
                    <?php
                        if (isset($_GET['cod'])) {
                            $sql = "SELECT p.cod AS cod, p.nome AS nome, p.valor AS valor,
                                           t.descr AS tipo, c.descr AS cat, p.dtfab AS dtfab,
                                           p.dtval AS dtval, p.descr AS descr, p.img AS img
                                    FROM produto p JOIN tipo t ON p.ctipo = t.cod
                                                   JOIN categoria c ON p.ccat = c.cod
                                    WHERE p.cod = " . $_GET['cod'];

                            $produto = $bd->select($sql)[0];
                        } else header("Location: pesquisa.php");
                    ?>

                    <form action="" method="post" id="form"></form>

                    <input name="img" id="i-img" type="image" src="../img/default.png" form="form">

                    <label for="i-codigo" id="l-codigo">Código</label>
                    <input name="codigo" id="i-codigo" type="text" readonly form="form"
                           value="<?= $produto['cod']; ?>">

                    <label for="i-nome" id="l-nome">Nome</label>
                    <input name="nome" id="i-nome" type="text" form="form"
                           value="<?= $produto['nome']; ?>">

                    <label for="i-valor" id="l-valor">Valor</label>
                    <input name="valor" id="i-valor" type="text" form="form"
                           value="<?= $produto['valor']; ?>">

                    <label for="s-tipo" id="l-tipo">Tipo</label>
                    <select name="tipo" id="s-tipo" form="form">
                        <option value="Selecione...">Selecione...</option>
                        <?php
                            $sql = "SELECT descr FROM tipo";
                            $tipos = $bd->select($sql);

                            foreach ($tipos as $t) {
                                printf("<option value='%s' %s>%s</option>",
                                       strtolower($t['descr']),
                                       ($t['descr'] == $produto['tipo'] ? "selected" : ""),
                                       $t['descr']);
                            }
                        ?>
                    </select>

                    <label for="s-categoria" id="l-categoria">Categoria</label>
                    <select name="categoria" id="s-categoria" form="form">
                        <option value="Selecione...">Selecione...</option>
                        <?php
                            $sql = "SELECT descr FROM categoria";
                            $cats = $bd->select($sql);

                            foreach ($cats as $c) {
                                printf("<option value='%s' %s>%s</option>",
                                       strtolower($c['descr']),
                                       ($c['descr'] == $produto['cat'] ? "selected" : ""),
                                       $c['descr']);
                            }
                        ?>
                    </select>

                    <label for="i-fabricacao" id="l-fabricacao">Fabricação</label>
                    <input name="fabricacao" id="i-fabricacao" type="date" form="form"
                           value="<?= $produto['dtfab']; ?>">

                    <label for="i-validade" id="l-validade">Validade</label>
                    <input name="validade" id="i-validade" type="date" form="form"
                           value="<?= $produto['dtval']; ?>">

                    <label for="i-descricao" id="l-descricao">Descrição</label>
                    <textarea name="descricao" id="i-descricao" rows="2" form="form"><?= $produto['descr'] ?></textarea>
                </div>

                <div class="grid-conteiner" id="envio">
                    <input type="submit" name="excluir" id="i-excluir" value="EXCLUIR" form="form">
                    <input type="submit" name="alterar" id="i-alterar" value="ALTERAR" form="form">

                    <input type="hidden" name="envio" id="i-envio" form="form">
                </div>
            </main>
        </div>

        <!-- scripts -->

        <script src="../js/validacao-produto.js"></script>
        <script src="../js/menu-lateral.js"></script>
    </body>
</html>
