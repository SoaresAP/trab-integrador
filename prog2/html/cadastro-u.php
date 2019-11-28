<?php
  include_once "../classes/Usuario.php";

  if (isset($_POST['cadastrar'])){

    if (empty($_POST['usuario'])){
        echo "Preencha o login!";

    }
    if (empty($_POST['email'])){
        echo "Preencha o email!";

    }
    if (empty($_POST['senha'])){
        echo "Preencha a senha!";

    }



    $dados = array();
        $dados['login'] = $_POST['usuario'];
        $dados['senha'] = $_POST['senha'];
        $dados['email'] = $_POST['email'];

        $usuario = new Usuario();
        $resultado = $usuario->cadastrar($dados);
        if ($resultado) {
            echo "Usuário cadastrado com sucesso!";
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
                <p>Login:
                <p>Email:
                <p>Senha:
                <p>Confirmar senha:
            </div>

            <div class="entrada">

                <form class="" action="" method="post" id="entrada"></form>

                <input type="text" name="usuario" id="usuario" autofocus form="entrada" maxlength="10"><br>
                <input type="text" name="email" id="email" form="entrada"><br>
                <input type="password" name="senha" id="senha" form="entrada" maxlength="20"><br>
                <input type="password" name="confirmasenha" id="confirmasenha" form="entrada" maxlength="20"><br>

            </div>

            <input form="entrada" type="submit" name="cadastrar" value="CADASTRAR">

        </div>

      </div>

    </body>
</html>
