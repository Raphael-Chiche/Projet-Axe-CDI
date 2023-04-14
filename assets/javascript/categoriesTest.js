const clickRap = document.querySelector(".Rap");
const clickKpop = document.querySelector(".Kpop");
const clickClassique = document.querySelector(".Classique");
const clickElectro = document.querySelector(".Electro");
const clickJazz = document.querySelector(".Jazz");
const clickRock = document.querySelector(".Rock");
const clickMetal = document.querySelector(".Metal");
const clickPop = document.querySelector(".Pop");
const clickFunk = document.querySelector(".Funk");

const rap = document.getElementsByClassName("chatRap");
const kpop = document.getElementsByClassName("chatKpop");
const classique = document.getElementsByClassName("chatClassique");
const electro = document.getElementsByClassName("chatElectro");
const jazz = document.getElementsByClassName("chatJazz");
const rock = document.getElementsByClassName("chatRock");
const metal = document.getElementsByClassName("chatMetal");
const pop = document.getElementsByClassName("chatPop");
const funk = document.getElementsByClassName("chatFunk");

const tweets = document.querySelectorAll(".tweet");

const clickSidNav = document.querySelector(".sidenavCategories");
const clickRapSidenav = document.querySelector(".Rap.sidenavCategories");
const clickKpopSidenav = document.querySelector(".Kpop.sidenavCategories");
const clickClassiqueSidenav = document.querySelector(
  ".Classique.sidenavCategories"
);
const clickElectroSidenav = document.querySelector(
  ".Electro.sidenavCategories");
const clickJazzSidenav = document.querySelector(".Jazz.sidenavCategories");
const clickRockSidenav = document.querySelector(".Rock.sidenavCategories");
const clickMetalSidenav = document.querySelector(".Metal.sidenavCategories");
const clickPopSidenav = document.querySelector(".Pop.sidenavCategories");
const clickFunkSidenav = document.querySelector(".Funk.sidenavCategories");

const txtRap = document.querySelector(".txtRap");
const allReset = document.querySelector(".resetbt");
const allResetResponsive = document.querySelector(".reset.formInfo");


const divTag = document.querySelector(".div_tag");
// let autreCategorieRapSidenav = false;
// condition / rep1 rep 2
let autreCategorieRap = false;

const root = document.querySelector(':root');

function filtrecategorie(categorie) {
  tweets.forEach((tweet) => {
    if (tweet.className.split(" ")[0] != categorie) {
// filtre 
      if (tweet.className.split(" ")[3] == "none") {
        tweet.classList.remove("none");
      } else {
        tweet.classList.add("none");
      }

    //   bg color 
    let a = false;

    if(categorie=="chatRap" && a == true)
    {
        root.style.setProperty('--backgroundcolortag', '#ffffff');
        a=false
    } else if (categorie=="chatRap" && a == false){
        root.style.setProperty('--backgroundcolortag', '#ffadad');
        a=true
    }
    
    }
  });
}

function ResetAll() {
  tweets.forEach((tweet) => {
    if (tweet.className.split(" ")[3] == "none") {
      tweet.classList.remove("none");
    }
  });
}

clickRap.addEventListener("click", () => filtrecategorie("chatRap"));
clickRapSidenav.addEventListener("click", () => filtrecategorie("chatRap"));

clickClassique.addEventListener("click", () => filtrecategorie("chatClassique"));
clickClassiqueSidenav.addEventListener("click", () =>filtrecategorie("chatClassique"));

clickKpop.addEventListener("click", () => filtrecategorie("chatKpop"));
clickKpopSidenav.addEventListener("click", () => filtrecategorie("chatKpop"));

clickElectro.addEventListener("click", () => filtrecategorie("chatElectro"));
clickElectroSidenav.addEventListener("click", () =>filtrecategorie("chatElectro"));

clickJazz.addEventListener("click", () => filtrecategorie("chatJazz"));
clickJazzSidenav.addEventListener("click", () => filtrecategorie("chatJazz"));

clickRock.addEventListener("click", () => filtrecategorie("chatRock"));
clickRockSidenav.addEventListener("click", () => filtrecategorie("chatRock"));

clickMetal.addEventListener("click", () => filtrecategorie("chatMetal"));
clickMetalSidenav.addEventListener("click", () => filtrecategorie("chatMetal"));

clickPop.addEventListener("click", () => filtrecategorie("chatPop"));
clickPopSidenav.addEventListener("click", () => filtrecategorie("chatPop"));

clickFunk.addEventListener("click", () => filtrecategorie("chatFunk"));
clickFunkSidenav.addEventListener("click", () => filtrecategorie("chatFunk"));

allReset.addEventListener("click", () => ResetAll());
allResetResponsive.addEventListener("click", () => ResetAll());
