<?php
  if (isset($_POST['cadastrar'])){

    $dados = array();
        $dados['login'] = $_POST['usuario'];
        $dados['senha'] = $_POST['senha'];
        $dados['email'] = $_POST['email'];

        $usuario = new Usuario();
        $resultado = $usuario->cadastrar($dados);
        if ($resultado) {
            echo "Usuário cadastrado com sucesso!";
        }
        else {
          echo "ERRO";
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

                <input type="text" name="usuario" id="usuario" autofocus><br>
                <input type="text" name="email" id="email"><br>
                <input type="password" name="senha" id="senha"><br>
                <input type="password" name="confirmasenha" id="confirmasenha"><br>

            </div>

            <a href="#" name="cadastrar">CADASTRAR</a>

        </div>

      </div>

    </body>
</html>
