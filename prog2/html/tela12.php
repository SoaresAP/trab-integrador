<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <title>Tela 12</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <link rel="stylesheet" href="../css/reset.css">

        <link rel="stylesheet" href="../css/estilo0.css">
        <link rel="stylesheet" href="../css/estilo2.css">
        <link rel="stylesheet" href="../css/estilo4.css">
        <link rel="stylesheet" href="../css/estilo5.css">
        <link rel="stylesheet" href="../css/estilo8.css">

        <link rel="stylesheet" href="../css/tela12.css">

        <link rel="stylesheet" href="../css/menu-lateral.css">
        <link rel="stylesheet" href="../css/menu-lateral-2.css">
    </head>

    <body>

        <div class="grid-conteiner" id="tela">

            <header class="grid-conteiner">
                <div class="barra">
                    <nav>
                        <a href="tela14.php">
                            <div class="link">USUÁRIOS</div>
                        </a>
                        <a href="tela10.php">
                            <div class="link">PRODUTOS</div>
                        </a>
                    </nav>
                </div>

                <div id="opcoes">
                    <img src="../img/menu.png" alt="opcoes">
                </div>
                <div id="usuarios">
                    <a href="tela14.php">USUÁRIOS</a>
                </div>
                <div id="produtos">
                    <a href="tela10.php">PRODUTOS</a>
                </div>

                <div id="logo">
                    <a href="tela1.php">
                        <img src="../img/vitari.jpg" alt="logo">
                    </a>
                </div>
                <div id="perfil">
                    <a href="#">
                        <img src="../img/perfil.png" alt="perfil">
                    </a>
                </div>
                <div id="sair">
                    <a href="#">SAIR</a>
                </div>

                <div id="pesquisa">
                    <input type="text" placeholder="Pesquisar produtos..."/>
                </div>
            </header>

            <main class="grid-conteiner">
                <div class="grid-conteiner" id="titulo">
                    <h1>CADASTRO DE PRODUTO</h1>
                </div>

                <div class="grid-conteiner" id="formulario">
                    <form action="" method="post" id="form"></form>

                    <input id="i-img" type="image" src="../img/default.png" >

                    <label for="i-codigo" id="l-codigo">Código</label>
                    <input id="i-codigo" type="text" form="form">

                    <label for="i-nome" id="l-nome">Nome</label>
                    <input id="i-nome" type="text" form="form">

                    <label for="i-valor" id="l-valor">Valor</label>
                    <input id="i-valor" type="text" form="form">

                    <label for="i-tipo" id="l-tipo">Tipo</label>
                    <input id="i-tipo" type="text" form="form">

                    <label for="i-categoria" id="l-categoria">Categorias</label>
                    <input id="i-categoria" type="text" form="form">

                    <label for="i-fabricacao" id="l-fabricacao">Fabricação</label>
                    <input id="i-fabricacao" type="text" form="form">

                    <label for="i-validade" id="l-validade">Validade</label>
                    <input id="i-validade" type="text" form="form">

                    <label for="i-descricao" id="l-descricao">Descrição</label>
                    <textarea id="i-descricao" rows="2" form="form"></textarea>
                </div>

                <div class="grid-conteiner" id="envio">
                    <input id="i-cadastrar" type="submit" value="CADASTRAR" form="form">
                </div>
            </main>
        </div>

        <!-- Scripts -->

        <script src="../js/menu-lateral.js"></script>
    </body>
</html>