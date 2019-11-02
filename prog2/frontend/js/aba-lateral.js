
document.getElementsByTagName('body')[0].onclick = function(){
    barra = document.getElementsByClassName('barra')[0];
    menu = document.querySelector('#categorias > img');

    if(barra.contains(event.target) || event.target == barra || event.target == menu){
        document.getElementsByClassName('barra')[0].style.display = 'grid';
    }
    else {
        document.getElementsByClassName('barra')[0].style.display = 'none';
    }
}
