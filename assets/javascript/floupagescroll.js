// au scroll ajouter filter: blur(1.5rem); 

const windowHeight = 2478;
const styleSidenav = document.querySelector(".sidebar");
const conteneur = document.querySelector(".conteneur");
const flouInscription = document.querySelector(".flouInscription");

window.addEventListener("scroll", function (event) {
  let ratio = (Math.ceil((window.scrollY / windowHeight) * 100)) 
  if (ratio > 30) {
    conteneur.classList.add("flouScroll");
    conteneur.style.transitionDelay = 0.1 +"s";
    flouInscription.classList.add("popUpafficher");
  }
});



console.log("salut");
document.querySelector(".sidebar .toggle-btn").addEventListener("click", function(){
    
    document.querySelector(".sidebar").classList.toggle("active");

});


if(typeof theme != "undefined"){
  if(theme === "black"){
    body.style.backgroundColor = "var(--vertfonce)";
  navbar.style.backgroundColor =  "var(--black)";
  styleSidenav.backgroundColor = "var(--vertclaire)";
  }
}
