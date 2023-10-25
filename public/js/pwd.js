const mostrar = document.getElementById("Mostrar");
const nomostrar = document.getElementById("NoMostrar");
const pwd = document.getElementById("password");

mostrar.addEventListener('click', ()=> {
    pwd.type = 'text';
    mostrar.style.display = 'none';
    nomostrar.style.display = 'flex'
});
nomostrar.addEventListener('click', () => {
    pwd.type = 'password';
    nomostrar.style.display = 'none';
    mostrar.style.display = 'flex'
});