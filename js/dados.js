document.addEventListener("DOMContentLoaded", function () {
  var editarBtn = document.getElementById("editarBtn");
  var salvarBtn = document.getElementById("salvarBtn");
  var camposDados = document.querySelectorAll(".campo__Dados input");

  // Adiciona um ouvinte de evento ao botão "Editar"
  editarBtn.addEventListener("click", function () {
    // Habilita os campos de dados e remove a classe 'disabled'
    for (let i = 0; i < camposDados.length; i++) {
      const campo = camposDados[i].getElementsByTagName("input")[0];
      campo.disabled = false;
      camposDados[i].classList.remove("disabled");
    }

    // Habilita o botão "Salvar Alterações"
    salvarBtn.disabled = false;
  });


  // Atualizar os campos no banco de dados quando o botão "Salvar Alterações" for clicado
  salvarBtn.addEventListener("click", function () {
    // Aqui você pode adicionar o código para enviar os dados atualizados para o servidor (PHP) usando AJAX ou uma requisição POST.
    // Por exemplo, você pode usar o fetch API para enviar os dados para o arquivo "atualizar.php".
    // Certifique-se de obter os valores atualizados dos campos e enviar para o servidor.

    // Exemplo usando o fetch API
    var formData = new FormData();
    formData.append("nome", document.getElementById("nomeDados").value);
    formData.append("endereco", document.getElementById("enderecoDados").value);
    formData.append("cnpj", document.getElementById("cnpjDados").value);
    formData.append("senha", document.getElementById("senhaDados").value);

    fetch("atualizar.php", {
      method: "POST",
      body: formData
    })
      .then(function (response) {
        // Manipular a resposta do servidor, se necessário
      })
      .catch(function (error) {
        // Manipular erros, se ocorrerem
      });
    // Desabilita o botão "Salvar Alterações"
    salvarBtn.disabled = true;
  });
});