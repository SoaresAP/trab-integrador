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
          <?php include "../includes/head3.php"; ?>

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
                                include "../classes/BD.php";

                                $bd = new BD();
                                $sql = "SELECT login, email
                                        FROM usuario";
                                $usuarios = $bd->select($sql);

                                foreach ($usuarios as $u) {
                                    printf("<tr>
                                                <td>%s</td>
                                                <td>%s</td>
                                                <td>
                                                    <a href='#'>
                                                        <img src='../img/excluir.png'>
                                                    </a>
                                                </td>
                                            </tr>",
                                            $u['login'], $u['email']);
                                }
                            ?>

                            <!-- <tr>
                                <td>user</td>
                                <td>user@gmail.com</td>
                                <td>
                                    <a href="#">
                                        <img src="../img/excluir.png">
                                    </a>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </main>
        </div>

        <!-- Scripts -->

        <script src="../js/menu-lateral.js"></script>
    </body>
</html>
