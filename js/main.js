// Controlar de VolteAoTopo

const btn = document.getElementById("ArrowUp__btn");

btn.addEventListener("click", ()=> {
    window.scrollTo(0,0);
});

document.addEventListener('scroll', ocultar);

function ocultar(){
    if(window.scrollY > 10){
        btn.style.opacity = "1";
        btn.style.transition = "all .6s";
        btn.style.pointerEvents = "auto";
    } else { 
        btn.style.opacity = "0";
        btn.style.transition = "all .4s";
        btn.style.pointerEvents = "none";
    }
};

ocultar();

// Controlador de Cards

const cards = document.querySelectorAll(".card__inner");

function flipCard() {
    this.classList.toggle('is-flipped');
};

cards.forEach((card) =>card.addEventListener("click", flipCard));