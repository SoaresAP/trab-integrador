<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <title>Vitari - Cosméticos e Perfumaria</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/estilo1.css">
        <link rel="stylesheet" href="../css/login.css">
    </head>

    <body>
      <div class="grid-conteiner">
        <div class="login">
            <div class="logo">
                <img src="../img/vitari.jpg">
            </div>
            <form action="../autenticacao.php" method="post" id="form-login">
              <div class="entrada">
                  <input type="text" name="login" id="login" placeholder="Login" autofocus><br>
                  <input type="password" name="senha" id="senha" placeholder="Senha"><br>
                  <input type="submit" id="botao" value="ENTRAR">
              </div>

            </form>


        </div>
      </div>
    </body>
</html>
