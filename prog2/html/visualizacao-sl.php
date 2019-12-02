<?php
  require_once "../classes/Produto.php";
  $produto = new Produto();

  $lista = $produto->filtroCodigo($_GET['id']);

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
        <link rel="stylesheet" href="../css/estilo6.css">
        <link rel="stylesheet" href="../css/estilo7.css">
        <link rel="stylesheet" href="../css/principal-sl.css">
    </head>

    <body>

        <div class="grid-conteiner" id="tela">

            <!--HEAD-->
            <?php include_once "../includes/head1.php"; ?>

            <main class="grid-conteiner">
                <div class="imagem">
                    <img src="../img/<?=$lista[0]['img'];?>" width="200">
                </div>
                <div class="nome"><h1><?=$lista[0]['nome'];?></h1></div>
                <div class="preco"><h1><?=$produto->formataPreco($lista[0]['valor']);?></h1></div>
                <div class="descricao"><p><?=$lista[0]['descr'];?></p></div>
            </main>
        </div>
        <script src="../js/menu-lateral.js">

        </script>

    </body>


</html>
