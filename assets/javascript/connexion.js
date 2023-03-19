const btnConnexion = document.querySelector(".btn-success");
const btnInscription = document.querySelector(".btn-light");

const connexion = document.getElementById("connectionDisplay");
const inscription = document.getElementById("inscriptionDisplay");

btnConnexion.addEventListener("click", function () {
  connexion.style.display = "block";
  inscription.style.display = "none";
});

btnInscription.addEventListener("click", function () {
  inscription.style.display = "block";
  connexion.style.display = "none";
});
