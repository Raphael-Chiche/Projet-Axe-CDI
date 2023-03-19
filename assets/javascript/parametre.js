const votreCompte = document.querySelector(".parametreVotreCompte");
const btnCompte = document.querySelector("#idVotreCompte");

const notification = document.querySelector(".parametreNotification");
const btnNotif = document.querySelector("#idNotification");

const themes = document.querySelector(".parametreTheme");
const btnchoix = document.querySelector("#idChoixTheme");



// if (!localStorage.getItem("actual_theme")) {
//   let theme = localStorage.setItem("actual_theme", "white");
// } else {
//   let theme = localStorage.getItem("actual_theme");
// }
// if (typeof theme != "undefined") {
//   if (theme === "black") {
//     body.style.backgroundColor = "var(--vertfonce)";
//     navbar.style.backgroundColor = "var(--black)";
//   }
// }



let estVisibleCompte = false;
// La variable isVisible est définie en dehors de la fonction et est initialisée à false, ce qui signifie que les div ne seront pas visibles au départ.
btnCompte.addEventListener("click", function () {
  estVisibleCompte = !estVisibleCompte; // true -> false et vice versa

  votreCompte.style.display = estVisibleCompte ? "flex" : "none"; // si c'est true, alors c'est none sinon c'est flex

  if (votreCompte.style.display == "flex") {
    notification.style.display = "none";
    themes.style.display = "none";
  }
});

let estVisibleNotif = false;
// La variable isVisible est définie en dehors de la fonction et est initialisée à false, ce qui signifie que les div ne seront pas visibles au départ.
btnNotif.addEventListener("click", function () {
  estVisibleNotif = !estVisibleNotif; // true -> false et vice versa

  notification.style.display = estVisibleNotif ? "flex" : "none"; // si c'est true, alors c'est none sinon c'est flex

  if (notification.style.display == "flex") {
    votreCompte.style.display = "none";
    themes.style.display = "none";
  }
});

let estVisibleTheme = false;
// La variable isVisible est définie en dehors de la fonction et est initialisée à false, ce qui signifie que les div ne seront pas visibles au départ.
btnchoix.addEventListener("click", function () {
  estVisibleTheme = !estVisibleTheme; // true -> false et vice versa

  themes.style.display = estVisibleTheme ? "flex" : "none"; // si c'est true, alors c'est none sinon c'est flex

  if (themes.style.display == "flex") {
    votreCompte.style.display = "none";
    notification.style.display = "none";
  }
});

// ---------------------------------------------------------


// const btnSombre = document.querySelector("#btnSombre");
// const btnClaire = document.querySelector("#btnClaire");
// const navbar = document.querySelector(".navbar");

// let target = document.body;
// let themeBody = localStorage.getItem("themeBody");
// if (themeBody !=null){
//   target.classList.toggle("darknav");
//   target.classList.toggle("darkbody");
// }

// function changeTheme(){
//   let themeBody = localStorage.getItem("themeBody");
//   if (themeBody != null) {
//     localStorage.removeItem("themeBody");
//   } else {
//     localStorage.setItem("themeBody", "darknav");
//   }
//   target.classList.toggle("darknav");

// }


//  btnSombre.addEventListener("click", changeTheme);
// // -------------------------------------

// btnSombre.addEventListener("click", function () {
//   body.style.backgroundColor = "var(--vertfonce)";
//   navbar.style.backgroundColor = "var(--black)";
// });



// btnClaire.addEventListener("click", function () {
//   body.style.backgroundColor = "#c8d7c6";
//   navbar.style.backgroundColor = "var(--vertfonce)";
// });