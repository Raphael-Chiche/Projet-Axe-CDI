// au scroll ajouter filter: blur(1.5rem); 

const windowHeight = 2478;

window.addEventListener("scroll", function (event) {
  let ratio = (Math.ceil((window.scrollY / windowHeight) * 100)) 
  if (ratio > 40) {
    body.classList.add("flouScroll");
    body.style.transitionDelay = 0.1 +"s";
  }
  
});


document.querySelector(".sidebar .toggle-btn").addEventListener("click", function(){
    document.querySelector(".sidebar").classList.toggle("active");
});


if(typeof theme != "undefined"){
  if(theme === "black"){
    body.style.backgroundColor = "var(--vertfonce)";
  navbar.style.backgroundColor =  "var(--black)";
  }
}
