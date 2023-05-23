// Controlar de VolteAoTopo

const btn = document.getElementById("ArrowUp__btn");

btn.addEventListener("click", () => {
  window.scrollTo(0, 0);
});

document.addEventListener('scroll', ocultar);

function ocultar() {
  if (window.scrollY > 10) {
    btn.style.opacity = "1";
    btn.style.transition = "all .6s";
    btn.style.pointerEvents = "auto";
  } else {
    btn.style.opacity = "0";
    btn.style.transition = "all .4s";
    btn.style.pointerEvents = "none";
  }
};

// Adicione uma classe CSS inicialmente oculta ao elemento
btn.classList.add('hidden');

// Função para remover a classe CSS oculta
function mostrar() {
  btn.classList.remove('hidden');
}

// Execute a função mostrar após o carregamento da página
window.addEventListener('load', mostrar);

ocultar();

// Controlador de Cards

const cards = document.querySelectorAll(".card__inner");

function flipCard() {
    this.classList.toggle('is-flipped');
};

cards.forEach((card) =>card.addEventListener("click", flipCard));


