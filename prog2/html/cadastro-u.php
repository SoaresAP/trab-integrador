<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

    <head>
        <title>Vitari - Cosméticos e Perfumaria</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/estilo1.css">
        <link rel="stylesheet" href="../css/cadastro-u.css">
    </head>

    <body>


      <div class="grid-conteiner">
        <div class="cadastro">
            <div class="logo">
                <img src="../img/vitari.jpg">
            </div>
            <div class="textos">
                <p>Login:
                <p>Email:
                <p>Senha:
                <p>Confirmar senha:

            </div>

            <div class="entrada">

                <form class="" action="temp.php" method="post" id="entrada"></form>

                <input type="text" name="usuario" id="usuario" autofocus form="entrada"><br>
                <input type="text" name="email" id="email" form="entrada"><br>
                <input type="password" name="senha" id="senha" form="entrada"><br>
                <input type="password" name="confirmasenha" id="confirmasenha" form="entrada"><br>

            </div>

            <input form="entrada" type="submit" name="cadastrar" value="CADASTRAR">

        </div>

      </div>

    </body>
</html>
