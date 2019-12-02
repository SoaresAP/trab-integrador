<?php

    require_once "../classes/Produto.php";
    $produto = new Produto();

<<<<<<< HEAD
    if(isset($_GET['busca'])){
      $lista = $produto->filtroBusca($_GET['busca']);
      $titulo = $_GET['busca'];
    } else if(isset($_GET['cat'])){
      $lista = $produto->filtroCategoria($_GET['cat']);
      $titulo = $_GET['cat'];
    } else {
      $lista = $produto->listarTodos();
      $titulo = "Todos";
=======
  	if (isset($_GET['busca'])) {
      $lista = $produto->filtroBusca($_GET['busca']);
    } else if (isset($_GET['cat'])) {
        $lista = $produto->filtroCategoria($_GET['cat']);
    } else {
      $lista = $produto->listarTodos();
>>>>>>> c3ca90dfa4f907be4cc81e5e21a4918e6a92f98f
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
        <link rel="stylesheet" href="../css/estilo1.css">
        <link rel="stylesheet" href="../css/estilo7.css">
        <link rel="stylesheet" href="../css/principal-lu.css">

    </head>

    <body>
        <div class="grid-conteiner" id="tela">

            <?php include_once "../includes/head2.php"; ?>

<<<<<<< HEAD
            <?php
            if ($titulo != "") {?>
                <div class="resultado">
                    <h2 name="resultado">Resultados por " <?= $titulo ?> "</h2>
                </div>
                <?php
            }
               ?>

=======
>>>>>>> c3ca90dfa4f907be4cc81e5e21a4918e6a92f98f
            <main class="grid-conteiner">
                <?php
                    foreach ($lista as $p) {
                        printf('<div class="produto">
                                    <a href="visualizacao-sl.php?id=%s">
<<<<<<< HEAD
                                        <img src="../img/%s" width="200">
=======
                                        <img src="../img/%s">
>>>>>>> c3ca90dfa4f907be4cc81e5e21a4918e6a92f98f
                                    </a>

                                    <p>%s</p>
                                    <p>%s</p>
                                </div>',
                                $p['cod'], $p['img'],
                                $p['nome'], $produto->formataPreco($p['valor']));
                    }
                ?>
            </main>
        </div>

        <script src="../js/submit-busca.js"></script>
        <script src="../js/menu-lateral.js"></script>
    </body>

</html>
