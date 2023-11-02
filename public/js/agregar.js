const anadir = document.querySelector(".añadir");
const cerrar = document.querySelector(".cancelar");
const form = document.getElementById("formulario");

anadir.addEventListener("click", function () {
    form.style.transform = 'translateY(0px)';
});

cerrar.addEventListener("click", function () {
    form.style.transform = 'translateY(-1000px)';
}); 