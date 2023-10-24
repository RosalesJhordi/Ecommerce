const anadir = document.querySelector(".añadir");
const cerrar = document.querySelector(".cancelar");
const form = document.querySelector(".formulario");
const body = document.body;
const foot = document.querySelector("footer");

anadir.addEventListener("click", function () {
    form.style.transform = 'translateY(0px)';
    body.style.backgroundColor = 'lightgrey';
    foot.style.backgroundColor = 'lightgrey';
});

cerrar.addEventListener("click", function () {
    form.style.transform = 'translateY(-1000px)';
    body.style.backgroundColor = 'white';
    foot.style.backgroundColor = 'rgb(229 231 235)';
}); 