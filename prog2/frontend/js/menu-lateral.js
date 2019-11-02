document.querySelector("body").onclick = function() {
    barra = document.querySelector(".barra");
    menu = (document.querySelector("#opcoes > img") ?
            document.querySelector("#opcoes > img") :
            document.querySelector("#categorias > img"));

    if (event.target == menu || event.target == barra
        || barra.contains(event.target)) {
        document.querySelector(".barra").style.display = "grid";
    }
    else {
        document.querySelector(".barra").style.display = "none";
    }
}
