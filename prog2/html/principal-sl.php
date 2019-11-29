
<?php
    require_once "../classes/Produto.php";
    //require_once "includes/functions.php"; MOSTRA A IMAGEM DO PRODUTO

    $produto = new Produto();

    // controller
      	if(isset($_GET['busca'])){

          $lista = $produto->filtroBusca($_GET['busca']);
          $titulo ="Resultado da busca por \"{$_GET['busca']}\" ";
        }
        /*
        elseif(isset($_GET['cat'])){
          $lista = $produto->filtroCategoria($_GET['cat']);
          $titulo = $CATEGORIAS[$_GET['cat']];
        }
        */
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
            <?php
                    if(empty($lista)) {
                        echo "<h2>Nenhum produto encontrado</h2>";
                    }
                    else {

                        foreach($lista as $n => $v){
            ?>

                          <main class="grid-conteiner">

                              <div class="produto">
                                  <img src="../img/perfume.png">
                                  <p><?=$lista[$n]['nome'];?></p>
                                  <p><?=$lista[$n]['valor'];?></p>
                              </div>

                         </main>
            <?php
                      }
                 }
            ?>
        </div>
        <script src="../js/submit-busca.js"></script>
        <script src="../js/menu-lateral.js"></script>
    </body>

</html>
