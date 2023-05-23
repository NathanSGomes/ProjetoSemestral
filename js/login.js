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
    registro.addEventListener("click", ()=>{
        container.classList.add("active");
    })

    login.addEventListener("click", ()=>{
        container.classList.remove("active");
    })