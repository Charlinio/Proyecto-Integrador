var scroll = new SmoothScroll('a[href*="#"]',{speed: 1000});
var barra = document.getElementById("barra");
var posicion = 0;

var acerca = document.querySelector("#Acerca");
var rect = acerca.getBoundingClientRect();

var lastScrollTop = 0;
var azul = 0;
window.addEventListener("scroll", function(){
   console.log(rect.top);
   if (window.pageYOffset > rect.top -85) {
     barra.style.backgroundColor = "rgba(28,180,230,"+azul+")";
     azul+=0.05;
   }else{
     barra.style.backgroundColor = "transparent";
     azul=0;
   }
}, false);
