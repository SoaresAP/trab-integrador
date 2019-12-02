
<?php
    require_once "../classes/Produto.php";

    $produto = new Produto();

  	if(isset($_GET['busca'])){
      $lista = $produto->filtroBusca($_GET['busca']);
    } else if(isset($_GET['cat'])){
      $lista = $produto->filtroCategoria($_GET['cat']);
    } else {
      $lista = $produto->listarTodos();
    }

      	if(isset($_GET['busca'])){
          $lista = $produto->filtroBusca($_GET['busca']);
        }

        elseif(isset($_GET['cat'])){
          $lista = $produto->filtroCategoria($_GET['cat']);
        }

        else {
          $lista = $produto->listarTodos();
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
        <link rel="stylesheet" href="../css/principal-sl.css">

    </head>

    <body>



        <div class="grid-conteiner" id="tela">


            <?php include_once "../includes/head1.php"; ?>

            <main class="grid-conteiner">
                <?php
                    foreach ($lista as $p) {
                        printf('<div class="produto">
                                    <a href="visualizacao-sl.php?id=%s">
                                        <img src="../img/%s">
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
