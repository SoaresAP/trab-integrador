
<?php
    require_once "../classes/Produto.php";

    $produto = new Produto();

    // controller
      	if(isset($_GET['busca'])){

          $lista = $produto->filtroBusca($_GET['busca']);
          $titulo = $_GET['busca'];
        }

        elseif(isset($_GET['cat'])){
          $lista = $produto->filtroCategoria($_GET['cat']);
          $titulo = $_GET['cat'];

        }

        else {
          $lista = $produto->listarTodos();
          $titulo = "Todos";

        }

?>


<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <title>Vitari - Cosméticos e Perfumaria</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <link rel="stylesheet" href="../css/reset.css">

        <link rel="stylesheet" href="../css/estilo1.css">
        <link rel="stylesheet" href="../css/estilo0.css">
        <link rel="stylesheet" href="../css/estilo7.css">
        <link rel="stylesheet" href="../css/principal-lu.css">
    </head>

    <body>

        <div class="grid-conteiner" id="tela">
            <!--HEAD-->
            <?php include_once "../includes/head2.php"; ?>

            <?php
            if ($titulo != "") {?>
                <div class="resultado">
                    <h2 name="resultado">Resultados por " <?= $titulo ?> "</h2>
                </div>
                <?php
            }
               ?>



            <?php
                        foreach($lista as $n => $v){
            ?>

                          <main class="grid-conteiner">
                              <div class="produto">
                                  <a href="visualizacao-lu.php?id=<?=$lista[$n]['cod'];?>"><img src="../img/<?=$produto->mostraImagem($lista[$n]['img']);?>" width="200"></a>

                                  <p><?=$lista[$n]['nome'];?></p>
                                  <p><?=$produto->formataPreco($lista[$n]['valor']);?></p>
                              </div>

                         </main>
            <?php
                      }

            ?>
        </div>


        <script src="../js/submit-busca.js"></script>
        <script src="../js/menu-lateral.js"></script>

    </body>

</html>
