// LOGIN E REGISTRO 

const container = document.querySelector(".container__login__registro"),
    pwShowHide = document.querySelectorAll(".showHidePw"),
    pwFields = document.querySelectorAll(".password"),
    registro = document.querySelector(".registro__link"),
    login = document.querySelector(".login__link");

// Icone Muda ao click da senha
pwShowHide.forEach((eyeIcon, index) => {
    eyeIcon.addEventListener("click", () => {
        if (pwFields[index].type === "password") {
            pwFields[index].type = "text";
            eyeIcon.classList.replace("uil-eye-slash", "uil-eye");
        } else {
            pwFields[index].type = "password";
            eyeIcon.classList.replace("uil-eye", "uil-eye-slash");
        }
    });
});

// Troco entre Login e Registro
registro.addEventListener("click", () => {
    container.classList.add("active");
})

login.addEventListener("click", () => {
    container.classList.remove("active");
})

//Campos Vermelhos
document.getElementById("botaoCadastrar").addEventListener("click", function() {
    var nome = document.getElementById("nome");
    var email = document.getElementById("email");
    var endereco = document.getElementById("endereco");
    var cnpj = document.getElementById("cnpj");
    var senha = document.getElementById("senha");
    var confirmarSenha = document.getElementById("confirmarSenha");

    var camposVazios = false;

    if (nome.value === "") {
      nome.style.borderColor = "red";
      camposVazios = true;
    } else {
      nome.style.borderColor = "";
    }

    if (email.value === "") {
      email.style.borderColor = "red";
      camposVazios = true;
    } else {
      email.style.borderColor = "";
    }

    if (endereco.value === "") {
      endereco.style.borderColor = "red";
      camposVazios = true;
    } else {
      endereco.style.borderColor = "";
    }

    if (cnpj.value === "") {
      cnpj.style.borderColor = "red";
      camposVazios = true;
    } else {
      cnpj.style.borderColor = "";
    }

    if (senha.value === "") {
      senha.style.borderColor = "red";
      camposVazios = true;
    } else {
      senha.style.borderColor = "";
    }

    if (confirmarSenha.value === "") {
      confirmarSenha.style.borderColor = "red";
      camposVazios = true;
    } else {
      confirmarSenha.style.borderColor = "";
    }
  });
