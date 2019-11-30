form = document.querySelector("form");
form.addEventListener("submit", validaProduto);

function validaProduto() {
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

    patt = /^\d+$/i;
    label = cod.previousElementSibling;
    if (!patt.test(cod.value)) {
        valid = false;
        label.style.color = "red";
    } else {
        label.style.color = "black";
    }

    patt = /^([\da-z])+( [\da-z]+)*$/i;
    label = nome.previousElementSibling;
    if (!patt.test(nome.value)) {
        valid = false;
        label.style.color = "red";
    } else {
        label.style.color = "black";
    }

    patt = /^\d+(\.\d+)?$/i;
    label = valor.previousElementSibling;
    if (!patt.test(valor.value)) {
        valid = false;
        label.style.color = "red";
    } else {
        label.style.color = "black";
    }

    label = tipo.previousElementSibling;
    if (tipo.selectedIndex == 0) {
        valid = false;
        label.style.color = "red";
    } else {
        label.style.color = "black";
    }

    label = categoria.previousElementSibling;
    if (categoria.selectedIndex == 0) {
        valid = false;
        label.style.color = "red";
    } else {
        label.style.color = "black";
    }

    label1 = fabricacao.previousElementSibling;
    if (!fabricacao.value) {
        valid = false;
        label1.style.color = "red";
    } else {
        label1.style.color = "black";
    }

    label2 = validade.previousElementSibling;
    if (!validade.value) {
        valid = false;
        label2.style.color = "red";
    } else {
        label2.style.color = "black";
    }

    if (fabricacao.value && validade.value) {
        df = new Date(fabricacao.value);
        dv = new Date(validade.value);

        if (df >= dv) {
            valid = false;
            label1.style.color = "red";
            label2.style.color = "red";
        } else {
            label1.style.color = "black";
            label2.style.color = "black";
        }
    }

    label = descricao.previousElementSibling;
    if (!descricao.value) {
        valid = false;
        label.style.color = "red";
    } else {
        label.style.color = "black";
    }


    if (valid) {
        cad = document.querySelector("input[id='i-cadastrar']");

        alt = document.querySelector("input[id='i-alterar']");
        exc = document.querySelector("input[id='i-excluir']");

        hid = document.querySelector("input[id='i-envio']");

        if (event.explicitOriginalTarget == cad) {
            hid.value = "cadastrar";
            form.submit();
        } else if (event.explicitOriginalTarget == alt) {
            hid.value = "alterar";
            form.submit();
        } else if (event.explicitOriginalTarget == exc) {
            hid.value = "excluir";
            form.submit();
        }
    }
    else return false;
}
