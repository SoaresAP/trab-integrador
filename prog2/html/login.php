<?php

include_once "../classes/Usuario.php";
$usuario = new Usuario();

include_once "../classes/Admin.php";
$admin = new Admin();

if (!empty($_POST)) {
    $u = $usuario->find($_POST['login']);
    $a = $admin->find($_POST['login']);

    if (empty($a) && empty($u)) {
        header("Location: ../html/login.php?erro=1");
    } else if (!empty($u)) {
        $l = $usuario->login($_POST['login'], $_POST['senha']);

        if ($l) {
            session_start();
            $_SESSION['login'] = $_POST['login'];

            header("Location: ../html/principal-lu.php");
        } else {
            header("Location: ../html/login.php?erro=2");
        }
    } else if (!empty($a)) {
        $l = $admin->login($_POST['login'], $_POST['senha']);

        if ($l) {
            session_start();
            $_SESSION['login'] = $_POST['login'];

            header("Location: ../html/principal-la.php");
        } else {
            header("Location: ../html/login.php?erro=2");
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
        <link rel="stylesheet" href="../css/login.css">
    </head>

    <body>
      <div class="grid-conteiner">
        <div class="login">
            <div class="logo">
                <img src="../img/vitari.jpg">
            </div>
            <form action="" method="post" id="form-login">
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
