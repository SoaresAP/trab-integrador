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
        <link rel="stylesheet" href="../css/estilo5.css">
        <link rel="stylesheet" href="../css/estilo8.css">

        <link rel="stylesheet" href="../css/alteracao-p-la.css">

        <link rel="stylesheet" href="../css/menu-lateral.css">
        <link rel="stylesheet" href="../css/menu-lateral-2.css">
    </head>

    <body>

        <div class="grid-conteiner" id="tela">

          <!--HEAD-->
          <?php include "../includes/head3.php"; ?>

            <main class="grid-conteiner">
                <div class="grid-conteiner" id="titulo">
                    <h1>ALTERAÇÃO DE PRODUTO</h1>
                </div>

                <div class="grid-conteiner" id="titulo">
                    <h1>CADASTRO DE PRODUTO</h1>
                </div>

                <div class="grid-conteiner" id="formulario">
                    <form action="" method="post" id="form"></form>

                    <input name="img" id="i-img" type="image" src="../img/default.png" form="form">

                    <label for="i-codigo" id="l-codigo">Código</label>
                    <input name="codigo" id="i-codigo" type="text" form="form">

                    <label for="i-nome" id="l-nome">Nome</label>
                    <input name="nome" id="i-nome" type="text" form="form">

                    <label for="i-valor" id="l-valor">Valor</label>
                    <input name="valor" id="i-valor" type="text" form="form">

                    <label for="s-tipo" id="l-tipo">Tipo</label>
                    <select name="tipo" id="s-tipo" form="form">
                        <option value="Selecione..." selected>Selecione...</option>
                        <option value="Higiene">Higiene</option>
                    </select>

                    <label for="s-categoria" id="l-categoria">Categoria</label>
                    <select name="categoria" id="s-categoria" form="form">
                        <option value="Selecione..." selected>Selecione...</option>
                        <option value="Higiene">Higiene</option>
                    </select>

                    <label for="i-fabricacao" id="l-fabricacao">Fabricação</label>
                    <input name="fabricacao" id="i-fabricacao" type="text" form="form">

                    <label for="i-validade" id="l-validade">Validade</label>
                    <input name="validade" id="i-validade" type="text" form="form">

                    <label for="i-descricao" id="l-descricao">Descrição</label>
                    <textarea name="descricao" id="i-descricao" rows="2" form="form"></textarea>
                </div>

                <div class="grid-conteiner" id="envio">
                    <input name="cadastrar" id="i-cadastrar" type="submit" value="CADASTRAR" form="form">
                </div>
            </main>
        </div>

        <!-- Scripts -->

        <script src="../js/menu-lateral.js"></script>
    </body>
</html>
