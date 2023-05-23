// Obtém os elementos do DOM
const editarBtn = document.getElementById("editarBtn");
const salvarBtn = document.getElementById("salvarBtn");
const camposDados = document.getElementsByClassName("campo__Dados");

// Adiciona um ouvinte de evento ao botão "Editar"
editarBtn.addEventListener("click", function() {
  // Habilita os campos de dados e remove a classe 'disabled'
  for (let i = 0; i < camposDados.length; i++) {
    const campo = camposDados[i].getElementsByTagName("input")[0];
    campo.disabled = false;
    camposDados[i].classList.remove("disabled");
  }

  // Habilita o botão "Salvar Alterações"
  salvarBtn.disabled = false;
});

// Adicione um ouvinte de evento ao botão "Salvar Alterações" (se necessário)
salvarBtn.addEventListener("click", function() {
  // Aqui você pode adicionar a lógica para salvar as alterações dos campos de dados

  // Desabilita novamente os campos de dados e adiciona a classe 'disabled'
  for (let i = 0; i < camposDados.length; i++) {
    const campo = camposDados[i].getElementsByTagName("input")[0];
    campo.disabled = true;
    camposDados[i].classList.add("disabled");
  }

  // Desabilita o botão "Salvar Alterações"
  salvarBtn.disabled = true;
});
