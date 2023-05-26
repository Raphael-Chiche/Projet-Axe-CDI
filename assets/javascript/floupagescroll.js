document.querySelector(".sidebar .toggle-btn").addEventListener("click", function(){
    
    styleSidenav.classList.toggle("active");

});


if(typeof theme != "undefined"){
  if(theme === "black"){
    body.style.backgroundColor = "var(--vertfonce)";
  navbar.style.backgroundColor =  "var(--black)";
  styleSidenav.backgroundColor = "var(--vertclaire)";
  }
}
