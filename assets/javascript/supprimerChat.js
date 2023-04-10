const popUpz = document.querySelector(".popupSupprimer");
const clickPoubelle = document.querySelectorAll(".deleteChat");
const annulerDelete = document.querySelector(".annulerDelete");
const suppr = document.querySelectorAll(".poubelle");

//selection de toute les 
clickPoubelle.forEach((a) => { 
  a.addEventListener("click", function () {
    popUpz.classList.toggle("visible");
  });
});

annulerDelete.addEventListener("click", function () {
  popUpz.classList.toggle("visible");
});
