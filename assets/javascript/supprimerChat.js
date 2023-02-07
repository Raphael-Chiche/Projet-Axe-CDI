const popUpz = document.querySelector(".popupSupprimer");
const bouton1 = document.querySelector(".deleteChat");
const validerDelete = document.querySelector(".validerDelete");
const annulerDelete = document.querySelector(".annulerDelete");
const suppr = document.querySelector(".poubelle");

bouton1.addEventListener("click", function (){
    popUpz.style.display = "flex";
})

validerDelete.addEventListener("click", function (){
    popUpz.style.display = "none";
    suppr.remove();
})
annulerDelete.addEventListener("click", function(){
    popUpz.style.display = "none";
})

