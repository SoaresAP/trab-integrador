form = document.querySelector("form");
form.addEventListener("submit", submit);

busca = document.querySelector("input[name='busca']");

function submit() {
    event.preventDefault();

    val = busca.value.trim(); // retira espacos do comeco e fim
    alfaNumerico = val.match("^([0-9A-Za-z])+$");    // alfanumericos

    if (val == "" || alfaNumerico) {
        busca.value = val;
        form.submit();    // submita o form
    } else {
        return false;   // nao submita o form
    }
}
