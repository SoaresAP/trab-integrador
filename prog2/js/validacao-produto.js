form = document.querySelector("form");
form.addEventListener("submit", validaDados);

function validaDados() {
    console.log("subsubsub");

    event.preventDefault();

    valid = true;

    cod = document.querySelector("[name='codigo']");            // input text
    cod.value = cod.value.trim();
    nome = document.querySelector("[name='nome']");             // input text
    nome.value = nome.value.trim();
    valor = document.querySelector("[name='valor']");           // input text
    valor.value = valor.value.trim();
    valor.value = valor.value.replace(",", ".");
    tipo = document.querySelector("[name='tipo']");             // select
    categoria = document.querySelector("[name='categoria']");   // select
    fabricacao = document.querySelector("[name='fabricacao']"); // input date
    validade = document.querySelector("[name='validade']");     // input date
    descricao = document.querySelector("[name='descricao']");   // textarea
    descricao.value = descricao.value.trim();

    patt1 = /^\d+$/;
    if (!patt1.test(cod.value)) {
        valid = false;
    } else {

    }

    patt2 = /^([\da-z])+( [\da-z]+)*$/i;
    if (!patt2.test(nome.value)) {
        valid = false;
    } else {

    }

    patt3 = /^\d+(\.\d+)?$/i;
    if (!patt3.test(valor.value)) {
        valid = false;
    } else {

    }

    if (tipo.selectedIndex == 0) {
        valid = false;
    } else {

    }

    if (categoria.selectedIndex == 0) {
        valid = false;
    } else {

    }

    if (!fabricacao.value) {
        valid = false;
    } else {

    }

    if (!validade.value) {
        valid = false;
    } else {

    }

    if (!descricao.value) {
        valid = false;
    } else {

    }


    if (valid) form.submit();
    else return false;
}
