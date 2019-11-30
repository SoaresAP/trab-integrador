form = document.querySelector("form[id='form']");
form.addEventListener("submit", validaUsuario);

function validaUsuario() {
    event.preventDefault();

    valid = true;

    login = document.querySelector("input[id='login']");
    login.value = login.value.trim();
    email = document.querySelector("input[id='email']");
    email.value = email.value.trim();
    senha = document.querySelector("input[id='senha']");
    confirmasenha = document.querySelector("input[id='confirmasenha']");

    patt = /^[\da-z]+$/i;
    p = document.querySelector("#p-login");
    if (!patt.test(login.value)) {
        valid = false;
        p.style.color = "red";
    } else {
        p.style.color = "black";
    }

    patt = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i;
    p = document.querySelector("#p-email");
    if (!patt.test(email.value)) {
        valid = false;
        p.style.color = "red";
    } else {
        p.style.color = "black";
    }

    p1 = document.querySelector("#p-senha");
    p2 = document.querySelector("#p-confirmasenha");

    if (!senha.value || !confirmasenha.value) {
        valid = false;

        if (!senha.value) {
            p1.style.color = "red";
        } else {
            p1.style.color = "black";
        }

        if (!confirmasenha.value) {
            p2.style.color = "red";
        } else {
            p2.style.color = "black";
        }
    } else {
        if (senha.value != confirmasenha.value) {
            valid = false;
            p1.style.color = "red";
            p2.style.color = "red";
        } else {
            p1.style.color = "black";
            p2.style.color = "black";
        }
    }


    if (valid) {
        form.submit();
    } else {
        return false;
    }
}
