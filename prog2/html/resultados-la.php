<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <title>Vitari - Cosméticos e Perfumaria</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <link rel="stylesheet" href="../css/reset.css">

        <link rel="stylesheet" href="../css/estilo0.css">
        <link rel="stylesheet" href="../css/estilo2.css">
        <link rel="stylesheet" href="../css/estilo3.css">
        <link rel="stylesheet" href="../css/estilo8.css">

        <link rel="stylesheet" href="../css/resultados-la.css">

        <link rel="stylesheet" href="../css/menu-lateral.css">
        <link rel="stylesheet" href="../css/menu-lateral-2.css">
    </head>

    <body>

        <div class="grid-conteiner" id="tela">

          <!--HEAD-->
          <?php include_once "../includes/head3.php"; ?>

            <main class="grid-conteiner">
                <div id="tabela">
                    <table id="tabela-mobile">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Alterar</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                include_once "../classes/BD.php";

                                error_reporting(E_ALL ^ E_WARNING);

                                $bd = new BD();
                                $sql = "SELECT cod, nome
                                        FROM produto";
                                $produtos = $bd->select($sql);

                                if (isset($_GET['busca']))
                                    $busca = $_GET['busca'];

                                foreach ($produtos as $p) {
                                    $has = strpos(strtolower($p['nome']), strtolower($busca));

                                    if (empty($busca) || $has !== false) {
                                        printf("<tr>
                                                    <td>%s</td>
                                                    <td>%s</td>
                                                    <td>
                                                        <a href='alteracao-p-la.php'>
                                                            <img src='../img/edit.png'>
                                                        </a>
                                                    </td>
                                                </tr>",
                                                $p['cod'], $p['nome']);
                                    }
                                }
                            ?>
                        </tbody>
                    </table>

                    <table id="tabela-desktop">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Categoria</th>
                                <th>Valor</th>
                                <th>Data validade</th>
                                <th>Alterar</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $bd = new BD();
                                $sql = "SELECT p.cod AS cod, nome, c.descr AS cat, valor, dtval
                                        FROM produto p JOIN categoria c ON p.ccat = c.cod";
                                $produtos = $bd->select($sql);

                                if (isset($_GET['busca']))
                                    $busca = $_GET['busca'];

                                foreach ($produtos as $p) {
                                    $dtf = substr($p['dtval'], 8, 2) . "/"
                                           . substr($p['dtval'], 5, 2) . "/"
                                           . substr($p['dtval'], 0, 4);

                                    $has = strpos(strtolower($p['nome']), strtolower($busca));

                                    if (empty($busca) || $has !== false) {
                                        printf("<tr>
                                                    <td>%s</td>
                                                    <td>%s</td>
                                                    <td>%s</td>
                                                    <td>R$ %.2f</td>
                                                    <td>%s</td>
                                                    <td>
                                                        <a href='alteracao-p-la.php'>
                                                            <img src='../img/edit.png'>
                                                        </a>
                                                    </td>
                                                </tr>",
                                                $p['cod'], $p['nome'], $p['cat'], (float) $p['valor'], $dtf);
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div id="novo-produto">
                    <a href="cadastro-p-la.php">NOVO PRODUTO</a>
                </div>
            </main>
        </div>

        <!-- scripts -->

        <script src="../js/submit-busca.js"></script>
        <script src="../js/menu-lateral.js"></script>
    </body>
</html>
