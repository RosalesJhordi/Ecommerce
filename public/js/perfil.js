const open = document.getElementById("info");
const close = document.getElementById("close");
const div = document.getElementById("Informacion");

open.addEventListener("click", function() {
  div.style.transform = 'translateX(0px)';
});

close.addEventListener("click", function() {
  div.style.transform = 'translateX(900px)';
}); 
