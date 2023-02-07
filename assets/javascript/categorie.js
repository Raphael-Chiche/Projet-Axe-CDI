const clickRap = document.querySelector(".Rap");
const clickKpop = document.querySelector(".Kpop");
const clickClassique = document.querySelector(".Classique");
const clickElectro = document.querySelector(".Electro");
const clickJazz = document.querySelector(".Jazz");
const clickRock = document.querySelector(".Rock");
const clickMetal = document.querySelector(".Metal");
const clickPop = document.querySelector(".Pop");
const clickChill = document.querySelector(".Chill");

const rap = document.getElementsByClassName("chatRap");
const kpop = document.getElementsByClassName("chatKpop");
const classique = document.getElementsByClassName("chatClassique");
const electro = document.getElementsByClassName("chatElectro");
const jazz = document.getElementsByClassName("chatJazz");
const rock = document.getElementsByClassName("chatRock");
const metal = document.getElementsByClassName("chatMetal");
const pop = document.getElementsByClassName("chatPop");
const chill = document.getElementsByClassName("chatChill");
const tweet = document.getElementsByClassName("tweet");

const clickRapSidenav = document.querySelector(".Rap.sidenavCategories");
const clickKpopSidenav = document.querySelector(".Kpop.sidenavCategories");
const clickClassiqueSidenav = document.querySelector(".Classique.sidenavCategories");
const clickElectroSidenav = document.querySelector(".Electro.sidenavCategories");
const clickJazzSidenav = document.querySelector(".Jazz.sidenavCategories");
const clickRockSidenav = document.querySelector(".Rock.sidenavCategories");
const clickMetalSidenav = document.querySelector(".Metal.sidenavCategories");
const clickPopSidenav = document.querySelector(".Pop.sidenavCategories");
const clickChillSidenav = document.querySelector(".Chill.sidenavCategories");

// let autreCategorieRapSidenav = false;

let autreCategorieRap = false;

[clickRap, clickRapSidenav].forEach(function (elementRap) {
  //tableau
  elementRap.addEventListener("click", function () {
    autreCategorieRap = !autreCategorieRap;
    for (let i = 0; i < kpop.length; i++) {
      kpop[i].style.display = autreCategorieRap ? "none" : "flex";
    }
    for (let i = 0; i < classique.length; i++) {
      classique[i].style.display = autreCategorieRap ? "none" : "flex";
    }
    for (let i = 0; i < electro.length; i++) {
      electro[i].style.display = autreCategorieRap ? "none" : "flex";
    }
    for (let i = 0; i < jazz.length; i++) {
      jazz[i].style.display = autreCategorieRap ? "none" : "flex";
    }
    for (let i = 0; i < rock.length; i++) {
      rock[i].style.display = autreCategorieRap ? "none" : "flex";
    }
    for (let i = 0; i < metal.length; i++) {
      metal[i].style.display = autreCategorieRap ? "none" : "flex";
    }
    for (let i = 0; i < pop.length; i++) {
      pop[i].style.display = autreCategorieRap ? "none" : "flex";
    }
    for (let i = 0; i < chill.length; i++) {
      chill[i].style.display = autreCategorieRap ? "none" : "flex";
    }
  });
});

let autreCategoriekpop = false;
[clickKpop, clickKpopSidenav].forEach(function (elementKpop) {
  elementKpop.addEventListener("click", function () {
    autreCategoriekpop = !autreCategoriekpop;
    for (let i = 0; i < rap.length; i++) {
      rap[i].style.display = autreCategoriekpop ? "none" : "flex";
    }
    for (let i = 0; i < classique.length; i++) {
      classique[i].style.display = autreCategoriekpop ? "none" : "flex";
    }
    for (let i = 0; i < electro.length; i++) {
      electro[i].style.display = autreCategoriekpop ? "none" : "flex";
    }
    for (let i = 0; i < jazz.length; i++) {
      jazz[i].style.display = autreCategoriekpop ? "none" : "flex";
    }
    for (let i = 0; i < rock.length; i++) {
      rock[i].style.display = autreCategoriekpop ? "none" : "flex";
    }
    for (let i = 0; i < metal.length; i++) {
      metal[i].style.display = autreCategoriekpop ? "none" : "flex";
    }
    for (let i = 0; i < pop.length; i++) {
      pop[i].style.display = autreCategoriekpop ? "none" : "flex";
    }
    for (let i = 0; i < chill.length; i++) {
      chill[i].style.display = autreCategoriekpop ? "none" : "flex";
    }
  });
});

let autreCategorieClassique = false;
[clickClassique, clickClassiqueSidenav].forEach(function (elementClassique) {
  elementClassique.addEventListener("click", function () {
    autreCategorieClassique = !autreCategorieClassique;
    for (let i = 0; i < rap.length; i++) {
      rap[i].style.display = autreCategorieClassique ? "none" : "flex";
    }
    for (let i = 0; i < kpop.length; i++) {
      kpop[i].style.display = autreCategorieClassique ? "none" : "flex";
    }
    for (let i = 0; i < electro.length; i++) {
      electro[i].style.display = autreCategorieClassique ? "none" : "flex";
    }
    for (let i = 0; i < jazz.length; i++) {
      jazz[i].style.display = autreCategorieClassique ? "none" : "flex";
    }
    for (let i = 0; i < rock.length; i++) {
      rock[i].style.display = autreCategorieClassique ? "none" : "flex";
    }
    for (let i = 0; i < metal.length; i++) {
      metal[i].style.display = autreCategorieClassique ? "none" : "flex";
    }
    for (let i = 0; i < pop.length; i++) {
      pop[i].style.display = autreCategorieClassique ? "none" : "flex";
    }
    for (let i = 0; i < chill.length; i++) {
      chill[i].style.display = autreCategorieClassique ? "none" : "flex";
    }
  });
});

let autreCategorieElectro = false;
[clickElectro, clickElectroSidenav].forEach(function (elementElectro) {
  elementElectro.addEventListener("click", function () {
    autreCategorieElectro = !autreCategorieElectro;
    for (let i = 0; i < rap.length; i++) {
      rap[i].style.display = autreCategorieElectro ? "none" : "flex";
    }
    for (let i = 0; i < kpop.length; i++) {
      kpop[i].style.display = autreCategorieElectro ? "none" : "flex";
    }
    for (let i = 0; i < classique.length; i++) {
      classique[i].style.display = autreCategorieElectro ? "none" : "flex";
    }
    for (let i = 0; i < jazz.length; i++) {
      jazz[i].style.display = autreCategorieElectro ? "none" : "flex";
    }
    for (let i = 0; i < rock.length; i++) {
      rock[i].style.display = autreCategorieElectro ? "none" : "flex";
    }
    for (let i = 0; i < metal.length; i++) {
      metal[i].style.display = autreCategorieElectro ? "none" : "flex";
    }
    for (let i = 0; i < pop.length; i++) {
      pop[i].style.display = autreCategorieElectro ? "none" : "flex";
    }
    for (let i = 0; i < chill.length; i++) {
      chill[i].style.display = autreCategorieElectro ? "none" : "flex";
    }
  });
});

let autreCategorieJazz = false;
[clickJazz, clickJazzSidenav].forEach(function (elementJazz) {
  elementJazz.addEventListener("click", function () {
    autreCategorieJazz = !autreCategorieJazz;
    for (let i = 0; i < rap.length; i++) {
      rap[i].style.display = autreCategorieJazz ? "none" : "flex";
    }
    for (let i = 0; i < kpop.length; i++) {
      kpop[i].style.display = autreCategorieJazz ? "none" : "flex";
    }
    for (let i = 0; i < classique.length; i++) {
      classique[i].style.display = autreCategorieJazz ? "none" : "flex";
    }
    for (let i = 0; i < electro.length; i++) {
      electro[i].style.display = autreCategorieJazz ? "none" : "flex";
    }
    for (let i = 0; i < rock.length; i++) {
      rock[i].style.display = autreCategorieJazz ? "none" : "flex";
    }
    for (let i = 0; i < metal.length; i++) {
      metal[i].style.display = autreCategorieJazz ? "none" : "flex";
    }
    for (let i = 0; i < pop.length; i++) {
      pop[i].style.display = autreCategorieJazz ? "none" : "flex";
    }
    for (let i = 0; i < chill.length; i++) {
      chill[i].style.display = autreCategorieJazz ? "none" : "flex";
    }
  });
});

let autreCategorieRock = false;

[clickRock, clickRockSidenav].forEach(function (elementRock) {
  elementRock.addEventListener("click", function () {
    autreCategorieRock = !autreCategorieRock;
    for (let i = 0; i < rap.length; i++) {
      rap[i].style.display = autreCategorieRock ? "none" : "flex";
    }
    for (let i = 0; i < kpop.length; i++) {
      kpop[i].style.display = autreCategorieRock ? "none" : "flex";
    }
    for (let i = 0; i < classique.length; i++) {
      classique[i].style.display = autreCategorieRock ? "none" : "flex";
    }
    for (let i = 0; i < electro.length; i++) {
      electro[i].style.display = autreCategorieRock ? "none" : "flex";
    }
    for (let i = 0; i < jazz.length; i++) {
      jazz[i].style.display = autreCategorieRock ? "none" : "flex";
    }
    for (let i = 0; i < metal.length; i++) {
      metal[i].style.display = autreCategorieRock ? "none" : "flex";
    }
    for (let i = 0; i < pop.length; i++) {
      pop[i].style.display = autreCategorieRock ? "none" : "flex";
    }
    for (let i = 0; i < chill.length; i++) {
      chill[i].style.display = autreCategorieRock ? "none" : "flex";
    }
  });
});

let autreCategorieMetal = false;
[clickMetal, clickMetalSidenav].forEach(function (elementMetal) {
  elementMetal.addEventListener("click", function () {
    autreCategorieMetal = !autreCategorieMetal;
    for (let i = 0; i < rap.length; i++) {
      rap[i].style.display = autreCategorieMetal ? "none" : "flex";
    }
    for (let i = 0; i < kpop.length; i++) {
      kpop[i].style.display = autreCategorieMetal ? "none" : "flex";
    }
    for (let i = 0; i < classique.length; i++) {
      classique[i].style.display = autreCategorieMetal ? "none" : "flex";
    }
    for (let i = 0; i < electro.length; i++) {
      electro[i].style.display = autreCategorieMetal ? "none" : "flex";
    }
    for (let i = 0; i < jazz.length; i++) {
      jazz[i].style.display = autreCategorieMetal ? "none" : "flex";
    }
    for (let i = 0; i < rock.length; i++) {
      rock[i].style.display = autreCategorieMetal ? "none" : "flex";
    }
    for (let i = 0; i < pop.length; i++) {
      pop[i].style.display = autreCategorieMetal ? "none" : "flex";
    }
    for (let i = 0; i < chill.length; i++) {
      chill[i].style.display = autreCategorieMetal ? "none" : "flex";
    }
  });
});

let autreCategoriePop = false;
[clickPop, clickPopSidenav].forEach(function (elementPop) {
  elementPop.addEventListener("click", function () {
    autreCategoriePop = !autreCategoriePop;
    for (let i = 0; i < rap.length; i++) {
      rap[i].style.display = autreCategoriePop ? "none" : "flex";
    }
    for (let i = 0; i < kpop.length; i++) {
      kpop[i].style.display = autreCategoriePop ? "none" : "flex";
    }
    for (let i = 0; i < classique.length; i++) {
      classique[i].style.display = autreCategoriePop ? "none" : "flex";
    }
    for (let i = 0; i < electro.length; i++) {
      electro[i].style.display = autreCategoriePop ? "none" : "flex";
    }
    for (let i = 0; i < jazz.length; i++) {
      jazz[i].style.display = autreCategoriePop ? "none" : "flex";
    }
    for (let i = 0; i < rock.length; i++) {
      rock[i].style.display = autreCategoriePop ? "none" : "flex";
    }
    for (let i = 0; i < metal.length; i++) {
      metal[i].style.display = autreCategoriePop ? "none" : "flex";
    }
    for (let i = 0; i < chill.length; i++) {
      chill[i].style.display = autreCategoriePop ? "none" : "flex";
    }
  });
});

let autreCategorieChill = false;
[clickChill, clickChillSidenav].forEach(function (elementChill) {
  elementChill.addEventListener("click", function () {
    autreCategorieChill = !autreCategorieChill;
    for (let i = 0; i < rap.length; i++) {
      rap[i].style.display = autreCategorieChill ? "none" : "flex";
    }
    for (let i = 0; i < kpop.length; i++) {
      kpop[i].style.display = autreCategorieChill ? "none" : "flex";
    }
    for (let i = 0; i < classique.length; i++) {
      classique[i].style.display = autreCategorieChill ? "none" : "flex";
    }
    for (let i = 0; i < electro.length; i++) {
      electro[i].style.display = autreCategorieChill ? "none" : "flex";
    }
    for (let i = 0; i < jazz.length; i++) {
      jazz[i].style.display = autreCategorieChill ? "none" : "flex";
    }
    for (let i = 0; i < rock.length; i++) {
      rock[i].style.display = autreCategorieChill ? "none" : "flex";
    }
    for (let i = 0; i < pop.length; i++) {
      pop[i].style.display = autreCategorieChill ? "none" : "flex";
    }
    for (let i = 0; i < metal.length; i++) {
      metal[i].style.display = autreCategorieChill ? "none" : "flex";
    }
  });
});

// -------------------------------------------------------------------------

// const boxsChat= document.querySelector(".boxsChat")

// rap.classList.contains(boxsChat)

const restart = document.querySelector(".reset");
const restartSidenav = document.querySelector(".reset.sidenavCategories");

[restart, restartSidenav].forEach(function (elementRestart) {
  elementRestart.addEventListener("click", function () {
    for (let i = 0; i < rap.length; i++) {
      rap[i].style.display = "flex";
    }
    for (let i = 0; i < kpop.length; i++) {
      kpop[i].style.display = "flex";
    }
    for (let i = 0; i < classique.length; i++) {
      classique[i].style.display = "flex";
    }
    for (let i = 0; i < electro.length; i++) {
      electro[i].style.display = "flex";
    }
    for (let i = 0; i < jazz.length; i++) {
      jazz[i].style.display = "flex";
    }
    for (let i = 0; i < rock.length; i++) {
      rock[i].style.display = "flex";
    }
    for (let i = 0; i < metal.length; i++) {
      metal[i].style.display = "flex";
    }
    for (let i = 0; i < pop.length; i++) {
      pop[i].style.display = "flex";
    }
    for (let i = 0; i < chill.length; i++) {
      chill[i].style.display = "flex";
    }
  });
});
