<?php
    include_once "../classes/Usuario.php";
    $usuario = new Usuario();

    include_once "../classes/Admin.php";
    $admin = new Admin();

    if (!empty($_POST)){
        $dados = array('login' => $_POST['login'],
                       'senha' => $_POST['senha'],
                       'email' => $_POST['email']);

        $inAdm = $admin->find($_POST['login']);
        if (!$inAdm) {
            $res = $usuario->cadastrar($dados);
            if ($res) {
                session_start();
                $_SESSION['login'] = $_POST['login'];

                header("Location: principal-lu.php");
            } else {
                header("Location: cadastro-u.php");
            }
        }

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
        <link rel="stylesheet" href="../css/cadastro-u.css">
    </head>

    <body>


      <div class="grid-conteiner">
        <div class="cadastro">
            <div class="logo">
                <img src="../img/vitari.jpg">
            </div>

            <div class="textos">
                <p id="p-login">Login:</p>
                <p id="p-email">Email:</p>
                <p id="p-senha">Senha:</p>
                <p id="p-confirmasenha">Confirmar senha:</p>
            </div>

            <div class="entrada">

                <form action="" method="post" id="form"></form>

                <input type="text" name="login" id="login" autofocus form="form" maxlength="10"><br>
                <input type="text" name="email" id="email" form="form" maxlength="40"><br>
                <input type="password" name="senha" id="senha" form="form" maxlength="20"><br>
                <input type="password" name="confirmasenha" id="confirmasenha" form="form" maxlength="20"><br>

            </div>

            <input type="submit" name="cadastrar" value="CADASTRAR" form="form">

        </div>
      </div>

      <!-- scripts -->

      <script src="../js/validacao-cadastro-u.js"></script>

    </body>
</html>
