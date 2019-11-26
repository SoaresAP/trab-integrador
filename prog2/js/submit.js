busca = document.querySelector("input[name='busca']");
busca.addEventListener("keypress", enter);


function enter() {
    form = document.querySelector("form[id='form']");

    if (event.keyCode == 13) {  // enter
        console.log("58enter");
        form.submit();
    }
}
