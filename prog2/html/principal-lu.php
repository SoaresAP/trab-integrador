
<?php
    require_once "../classes/Produto.php";

    $produto = new Produto();

    // controller
      	if(isset($_GET['busca'])){

          $lista = $produto->filtroBusca($_GET['busca']);
          $titulo ="Resultado da busca por \"{$_GET['busca']}\" ";
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

        <script>

            document.querySelector('#categorias > img').onclick = function(){
                document.getElementsByClassName('barra')[0].style.display = 'grid';
                document.getElementsByClassName('barra')[0].focus();

            }

            document.querySelector('.barra').onblur = function(){

                document.getElementsByClassName('barra')[0].style.display = 'none';

            }


        </script>

    </body>

</html>
