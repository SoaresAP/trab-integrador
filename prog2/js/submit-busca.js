form = document.querySelector("form");
form.addEventListener("submit", submit);

busca = document.querySelector("input[name='busca']");

function submit() {
    event.preventDefault();

    val = busca.value.trim(); // retira espacos do comeco e fim
    patt = /^([\da-z])+( [\da-z]+)*$/i;
    alfaNumerico = patt.test(val);    // alfanumericos

    if (val == "" || alfaNumerico) {
        busca.value = val;
        form.submit();    // submita o form
    } else {
        return false;   // nao submita o form
    }
}
