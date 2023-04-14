const popUp = document.querySelector(".popup");
const bouton = document.querySelector(".floating-btn");
const annuler = document.querySelector(".annulerChat");

bouton.addEventListener("click", function (){
    popUp.style.display = "block";
})

annuler.addEventListener("click", function(){
    
    popUp.style.display = "none";
})