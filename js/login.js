// LOGIN E REGISTRO 

const container = document.querySelector(".container__login__registro"),
    pwShowHide = document.querySelectorAll(".showHidePw"),
    pwFields = document.querySelectorAll(".password"),
    registro = document.querySelector(".registro__link"),
    login = document.querySelector(".login__link");

    // Icone Muda ao click da senha
    pwShowHide.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwFields.forEach(pwFields =>{
                if(pwFields.type === "password"){
                    pwFields.type = "text";

                    pwShowHide.forEach(icon =>{
                       icon.classList.replace("uil-eye-slash", "uil-eye");
                    })

                }else {
                    pwFields.type = "password";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                     })
                }
            })
        })
    })

    // 
    registro.addEventListener("click", ()=>{
        container.classList.add("active");
    })

    login.addEventListener("click", ()=>{
        container.classList.remove("active");
    })