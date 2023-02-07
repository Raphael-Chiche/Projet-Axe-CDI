const apparaitreSport = document.querySelector(".sport");
const sport=document.getElementsByClassName("tweetSport");

let isVisibleSport = false;  
apparaitreSport.addEventListener("click", function() {
    isVisibleSport = !isVisibleSport;
    for (let i = 0; i < sport.length; i++) {
      sport[i].style.display = isVisibleSport ? "none" : "flex";
    }
  });
// -----------------------------------------------------------------------------------------------------

const apparaitreDivertissment = document.querySelector(".divertissement");
const divertissement=document.getElementsByClassName("tweetDivertissement");

let isVisibleDivertissement = false;  
apparaitreDivertissment.addEventListener("click", function() {
    isVisibleDivertissement = !isVisibleDivertissement;
    for (let i = 0; i < divertissement.length; i++) {
      divertissement[i].style.display = isVisibleDivertissement ? "none" : "flex";
    }
  });

// -----------------------------------------------------------------------------------------------------

const apparaitreMusique = document.querySelector(".musique");
const musique=document.getElementsByClassName ("tweetMusique");

let isVisibleMusique = false;  
apparaitreMusique.addEventListener("click", function() {
    isVisibleMusique = !isVisibleMusique;
    for (let i = 0; i < musique.length; i++) {
      musique[i].style.display = isVisibleMusique ? "none" : "flex";
    }
  });
  


const apparaitreSeries = document.querySelector(".series");
const series=document.getElementsByClassName("tweetSeries");
let isVisibleSeries = false;  
apparaitreSeries.addEventListener("click", function() {
    isVisibleSeries = !isVisibleSeries;
    for (let i = 0; i < series.length; i++) {
      series[i].style.display = isVisibleSeries ? "none" : "flex";
    }
  });
  


const apparaitreManga = document.querySelector(".manga");
const mangas=document.getElementsByClassName("tweetManga");
let isVisibleManga = false;

apparaitreManga.addEventListener("click", function() {
  isVisibleManga = !isVisibleManga;
  for (let i = 0; i < mangas.length; i++) {
    mangas[i].style.display = isVisibleManga ? "none" : "flex";
  }
});



