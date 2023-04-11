const popUpz = document.querySelectorAll(".popupSupprimer");
const clickPoubelle = document.querySelectorAll(".deleteChat");
const suppr = document.querySelectorAll(".poubelle");

//selection de toute les poubelles
clickPoubelle.forEach((a) => { 
  a.addEventListener("click", function () {
    console.log(a.nextElementSibling)
    let popup = a.nextElementSibling
    popup.classList.remove("visible");
    
    popup.querySelector('.annulerDelete').addEventListener('click', function() {
      popup.classList.add('visible')
    })
  });
});

annulerDelete.addEventListener("click", function () {
  popUpz.classList.toggle("visible");
});
