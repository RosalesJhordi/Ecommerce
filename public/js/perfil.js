const open = document.getElementById("info");
const close = document.getElementById("close");
const div = document.getElementById("Informacion");
const body = document.body;
const foot = document.querySelector("footer");

open.addEventListener("click", function() {
  div.style.transform = 'translateX(0px)';
  body.style.backgroundColor = 'lightgrey';
  foot.style.backgroundColor = 'lightgrey';
});

close.addEventListener("click", function() {
  div.style.transform = 'translateX(500px)';
  body.style.backgroundColor = 'white';
  foot.style.backgroundColor = 'rgb(229 231 235)';
}); 
