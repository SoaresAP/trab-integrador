<?php
  include_once "../classes/Usuario.php";
  if (isset($_POST['cadastrar'])){


    $dados = array();
        $dados['login'] = $_POST['usuario'];
        $dados['senha'] = $_POST['senha'];
        $dados['email'] = $_POST['email'];

        var_dump($dados);

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
