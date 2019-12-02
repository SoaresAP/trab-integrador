
<header class="grid-conteiner">
    <div id="categorias">
        <img src="../img/menu.png" alt="opcoes">

    </div>
    <div class="barra" tabindex="0">
        <nav>
          <a href="principal-lu.php?cat=Unhas"><div class="link">UNHAS</div></a>
          <a href="principal-lu.php?cat=Maquiagem"><div class="link">MAQUIAGEM</div></a>
          <a href="principal-lu.php?cat=Cabelos"><div class="link">CABELOS</div></a>
          <a href="principal-lu.php?cat=Kits"><div class="link">KITS</div></a>
          <a href="principal-lu.php?cat=Higiene"><div class="link">HIGIENE</div></a>
          <a href="principal-lu.php?cat=Pele"><div class="link">PELE</div></a>
          <a href="principal-lu.php?cat=Perfume"><div class="link">PERFUME</div></a>
          <a href="../sair.php"><div class="link" name="sair">SAIR</div></a>
        </nav>

    </div>
    <div id="logo">
      <a href="principal-lu.php"><img src="../img/vitari.jpg"></a>

    </div>
    <div id="perfil">
        <a href="#"><img src="../img/login.png"></a>
        <?php session_start();?>
        <figcaption>Bem vindo(a) <?=$_SESSION['login']; ?></figcaption>
    </div>
    <div id="sair">
        <a href="../sair.php"><img src="../img/sair.png"></a>
    </div>

    <form action="principal-lu.php" method="get" id="form"></form>
    <div id="pesquisa">
        <div id="divBusca">
            <input type="text" id="txtBusca" name="busca" form="form" placeholder="Pesquisar..."/>
            <img src="../img/lupa.png" id="btnBusca" width="16" height="16" alt="Buscar"/>
        </div>
    </div>

    <div id="barra-categorias">
        <nav>
          <a href="principal-lu.php?cat=Unhas">UNHAS</a> |
          <a href="principal-lu.php?cat=Maquiagem">MAQUIAGEM</a> |
          <a href="principal-lu.php?cat=Cabelos">CABELOS</a> |
          <a href="principal-lu.php?cat=Kits">KITS</a> |
          <a href="principal-lu.php?cat=Higiene">HIGIENE</a> |
          <a href="principal-lu.php?cat=Pele">PELE</a> |
          <a href="principal-lu.php?cat=Perfume">PERFUME</a>
        </nav>
    </div>
</header>
