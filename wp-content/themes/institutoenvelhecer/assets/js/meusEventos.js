function iniciaEventosLoad(){
    adicionaClasse();
    iniciaCarousel();
}
function adicionaClasse() {
    let a =  document.getElementsByClassName("coloca-aqui");
    console.log("bunda de macaco")
    let b = a[0];
    b.classList.add("show");
    b.classList.add("active");

}

function iniciaCarousel(){
    let card =  document.getElementsByClassName("card-noticia")
    let batata = card[0];
    batata.classList.add("active");
}