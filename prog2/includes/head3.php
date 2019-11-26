<!--CONTEMPLA AS TELAS 9,10,11 E 12-->
<header class="grid-conteiner">
    <div class="barra">
        <nav>
            <a href="gerenciamento-u-la.php">
                <div class="link">USUÁRIOS</div>
            </a>
            <a href="pesquisa-la.php">
                <div class="link">PRODUTOS</div>
            </a>
        </nav>
    </div>

    <div id="opcoes">
        <img src="../img/menu.png" alt="opcoes">
    </div>
    <div id="usuarios">
        <a href="gerenciamento-u-la.php">USUÁRIOS</a>
    </div>
    <div id="produtos">
        <a href="pesquisa-la.php">PRODUTOS</a>
    </div>

    <div id="logo">
        <a href="principal-sl.php">
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

    <form action="resultados-la.php" method="get" id="form"></form>
    <div id="pesquisa">
        <input type="text" name="busca" placeholder="Pesquisar produtos..." form="form" autofocus/>
    </div>
</header>
