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
            <?php include "../includes/head2.php"; ?>

            <main class="grid-conteiner">
                <div class="produto">
                    <img src="../img/perfume.png">
                    <p>Perfume Ferrari masculino</p>
                    <p>R$ 80,00</p>
                </div>

                <div class="produto">
                    <img src="../img/perfume.png">
                    <p>Shampoo</p>
                    <p>R$ 60,00</p>
                </div>

                <div class="produto">
                    <img src="../img/perfume.png">
                    <p>Máscara</p>
                    <p>R$ 30,00</p>
                </div>

                <div class="produto">
                    <img src="../img/perfume.png">
                    <p>Shampoo</p>
                    <p>R$ 50,00</p>
                </div>

                <div class="produto">
                    <img src="../img/perfume.png">
                    <p>Perfume Ferrari masculino</p>
                    <p>R$ 80,00</p>
                </div>

                <div class="produto">
                    <img src="../img/perfume.png">
                    <p>Perfume Ferrari masculino</p>
                    <p>R$ 80,00</p>
                </div>

                <div class="produto">
                    <img src="../img/perfume.png">
                    <p>Perfume Ferrari masculino</p>
                    <p>R$ 80,00</p>
                </div>

                <div class="produto">
                    <img src="../img/perfume.png">
                    <p>Perfume Ferrari masculino</p>
                    <p>R$ 80,00</p>
                </div>

                <div class="produto">
                    <img src="../img/perfume.png">
                    <p>Perfume Ferrari masculino</p>
                    <p>R$ 80,00</p>
                </div>

                <div class="produto">
                    <img src="../img/perfume.png">
                    <p>Perfume Ferrari masculino</p>
                    <p>R$ 80,00</p>
                </div>
            </main>
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
