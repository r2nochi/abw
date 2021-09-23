/* login POP-UP efect */

let openPopUp = document.getElementById("login"),
    closePopUp = document.getElementById("popup-close"),
    overlay = document.getElementById("overlay"),
    popupLogin = document.getElementById("popup-login");

openPopUp.addEventListener("click", function() {
    overlay.classList.add("active");

    popupLogin.classList.add("active");
});

closePopUp.addEventListener("click", function() {
    overlay.classList.remove("active");

    popupLogin.classList.remove("active");
});

/* Tootle menu */

let menu = document.getElementById("botonera");

let btnMenu = document.getElementById("btn-menu");

btnMenu.addEventListener("click", function() {
    menu.classList.toggle("toggle");
});

/* Acoorderon Preguntas */
/* const btnPregunta = document.querySelectorAll(".btn-pregunta");
const accordeon = document.querySelectorAll(".content-pregunta");

btnPregunta.forEach((cadaboton, i) => {
    btnPregunta[i].addEventListener("click", () => {
        accordeon.forEach((cadatexto, i) => {
            accordeon[i].classList.remove("active");
        });
        accordeon[i].classList.add("active");

        

        btnPregunta.forEach((cadaboton, i) => {
            btnPregunta[i].classList.remove("active");
        });
        btnPregunta[i].classList.add("active");
    });
}); */

const pregunta = document.querySelectorAll(".pregunta");

for (let i = 0; i < pregunta.length; i++) {
    pregunta[i].addEventListener("click", function() {
        this.classList.toggle("active");
    });
}
const btnPregunta = document.querySelectorAll(".btn-pregunta");
for (let e = 0; e < btnPregunta.length; e++) {
    btnPregunta[e].addEventListener("click", function() {
        btnPregunta.forEach((disable, e) => {
            btnPregunta[e].classList.remove("active");
        });
        this.classList.toggle("active");
    });
}