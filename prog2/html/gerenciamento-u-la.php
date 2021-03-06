<?php
    include_once "../classes/BD.php";
    $bd = new BD();
?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <title>Vitari - Cosméticos e Perfumaria</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <link rel="stylesheet" href="../css/reset.css">

        <link rel="stylesheet" href="../css/estilo0.css">
        <link rel="stylesheet" href="../css/estilo2.css">
        <link rel="stylesheet" href="../css/estilo4.css">

        <link rel="stylesheet" href="../css/gerenciamento-u-la.css">

        <link rel="stylesheet" href="../css/menu-lateral.css">
        <link rel="stylesheet" href="../css/menu-lateral-2.css">
    </head>

    <body>

        <div class="grid-conteiner" id="tela">

          <!--HEAD-->
          <?php include_once "../includes/head3.php"; ?>

            <main class="grid-conteiner">
                <div id="tabela">
                    <table>
                        <thead>
                            <tr>
                                <th>Login</th>
                                <th>Email</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $sql = "SELECT login, email
                                        FROM usuario";
                                $usuarios = $bd->select($sql);

                                foreach ($usuarios as $u) {
                                    printf("<tr>
                                                <td>%s</td>
                                                <td>%s</td>
                                                <td>
                                                    <a href='exclusao-u.php?login=%s'>
                                                        <img src='../img/excluir.png'>
                                                    </a>
                                                </td>
                                            </tr>",
                                            $u['login'], $u['email'], $u['login']);
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>

        <!-- scripts -->

        <script src="../js/menu-lateral.js"></script>
    </body>
</html>
