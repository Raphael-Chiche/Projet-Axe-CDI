const btnSombre = document.querySelector("#btnSombre");
const btnClaire = document.querySelector("#btnClaire");
const styleNavbar = document.querySelector(".navbar");
const styleNavbartitle = document.querySelector(".navbarTitle");

let theme;

if (!localStorage.getItem("actual_theme")) {
  theme = localStorage.setItem("actual_theme", "white");
} else {
  theme = localStorage.getItem("actual_theme");
}

if (theme === "white") {
  body.style.backgroundColor = "#c8d7c6";
  styleNavbar.style.backgroundColor = "#182d0e";
  styleNavbartitle.style.backgroundColor = "#182d0e";
}

if (theme === "black") {
  body.style.backgroundColor = "#182d0e";
  styleNavbar.style.backgroundColor = "#000000";
  styleNavbartitle.style.backgroundColor ="black";
}

btnClaire.addEventListener("click", () => {
  localStorage.setItem("actual_theme", "white");
  body.style.backgroundColor = "#c8d7c6";
  styleNavbar.style.backgroundColor = "#182d0e";
  styleNavbartitle.style.backgroundColor = "#182d0e";
  console.log("white");
});

btnSombre.addEventListener("click", () => {
  localStorage.setItem("actual_theme", "black");
  body.style.backgroundColor = "#182d0e";
  styleNavbar.style.backgroundColor = "#000000";
  styleNavbartitle.style.backgroundColor ="black";
  console.log("dark");
});

//---------------------------------------------------------
