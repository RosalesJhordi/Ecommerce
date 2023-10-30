const open = document.getElementById("abrir-menu-ops");
const close = document.getElementById("cerrar-menu-ops");
const div = document.getElementById("menu-ops");


open.addEventListener("click", function() {
  div.style.transform = 'translateX(0px)';
});

close.addEventListener("click", function() {
  div.style.transform = 'translateX(900px)';
}); 
